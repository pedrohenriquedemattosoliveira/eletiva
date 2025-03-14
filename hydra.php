
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>HYDRA</title>
    
</head>
<body>
    <div class="sidebar">
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Pesquisa" value="Pesquisa">
        </div>
        
        <div class="sidebar-section">
            <div class="sidebar-item">
                <input type="checkbox" id="item1">
                <label for="item1">FPS</label>
            </div>
            
            <div class="sidebar-item">
                <input type="checkbox" id="item2">
                <label for="item2">RPG</label>
            </div>
            
            <div class="sidebar-item">
                <input type="checkbox" id="item3">
                <label for="item3">Aventura</label>
            </div>
        </div>
        
        <div class="sidebar-section">
            <div class="sidebar-section-header">
                <span>Plataforma</span>
                <span class="dropdown-icon">▼</span>
            </div>
            
            <div class="sidebar-item">
                <input type="checkbox" id="section1-item1">
                <label for="section1-item1">PlayStation</label>
            </div>

            <div class="sidebar-item">
                <input type="checkbox" id="section1-item1">
                <label for="section1-item1">Xbox</label>
            </div>

            <div class="sidebar-item">
                <input type="checkbox" id="section1-item1">
                <label for="section1-item1">Nintendo</label>
            </div>

        </div>
        
        <div class="sidebar-section">
            <div class="sidebar-section-header">
                <span>Idioma</span>
                <span class="dropdown-icon">▼</span>
            </div>
            
            <div class="sidebar-item">
                <input type="checkbox" id="section2-item1">
                <label for="section2-item1">Dublado</label>
            </div>

            <div class="sidebar-item">
                <input type="checkbox" id="section2-item1">
                <label for="section2-item1">Legendado</label>
            </div>
        </div>
    </div>
    
    <div class="main-content">
        <div class="header">
            <div class="header-placeholder"></div>
            <h1>HYDRA</h1>
            <div class="header-icons">
                <div class="header-icon">←</div>
                <div class="header-icon">⚙️</div>
            </div>
        </div>
        
        <div class="card-container">
            <div class="card active"><img src="Imagens/Genshin.jpg" width="250" height="150" class="imagem" >
                <h1 class="jogos">Genshin Impact</h1>
        </div>
            <div class="card"><img src="Imagens/mario.jpg" width="250" height="150" class="imagem" >
            <h1 class="jogos">Super Mario Odyssey</h1>
        </div>
            <div class="card"><img src="Imagens/assettocorsa.jpg" width="250" height="150" class="imagem" >
            <h1 class="jogos">Assetto Corsa Competizione</h1>
        </div>
            <!-- Você pode adicionar mais cards conforme necessário -->
        </div>
    </div>
</body>
</html>

