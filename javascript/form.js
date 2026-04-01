document.addEventListener("DOMContentLoaded", () => {

     // ⬅️ importante!

      const botao = document.querySelector(".form-submit");

      if (!botao) {
        console.error("Botão não encontrado ❌");
        return;
      }

      botao.addEventListener("click", async function() {
        console.log("Evento de clique disparado"); // debug
        event.preventDefault(); 
        console.log("Botão clicado ✔️");

        // Captura dos dados
        const data = {
          nome: document.querySelector("#nomeCompleto")?.value || "",
          email: document.querySelector("#email")?.value || "",
          whatsapp: document.querySelector("#whatsapp")?.value || "",
          empresa: document.querySelector("#empresa")?.value || "",
          cargo: document.querySelector("#cargo")?.value || "",
          faturamento: document.querySelector("#faturamento")?.value || "",
          setor: document.querySelector("#setor")?.value || "",
          dor: document.querySelector("#dor")?.value || ""
        };

        console.log("Dados coletados:", data);

        // Validação básica
        if (!data.nome || !data.email || !data.whatsapp) {
          alert("Preencha nome, email e WhatsApp ❗");
          return;
        }

        try {
          // 🔥 Envio compatível com servidores anti-bot
          const formData = new URLSearchParams(data);

          const response = await fetch("mail.php", {
            method: "POST",
            credentials: "same-origin", // importante p/ cookies
            headers: {
              "Content-Type": "application/x-www-form-urlencoded"
            },
            body: formData
          });

          const text = await response.text();

          console.log("Status:", response.status);
          console.log("Resposta:", text);

          if (!response.ok) {
            throw new Error("Erro HTTP: " + response.status);
          }

          alert("Formulário enviado com sucesso! 🚀");

          // Limpar campos
          document.querySelectorAll("input, select").forEach(el => {
            if (el.tagName === "SELECT") {
              el.selectedIndex = 0;
            } else {
              el.value = "";
            }
          });

        } catch (error) {
          console.error("Erro:", error);
          alert("Erro ao enviar formulário ❌");
        }
      });
    });