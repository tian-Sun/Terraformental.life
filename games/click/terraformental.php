<?php
require_once '../../includes/config.php';

$title = 'Terraformental - A Unique Idle Game';
$description = 'Play Terraformental, an engaging idle game where you transform and develop your own world. Build, upgrade, and discover new technologies.';
$canonical_url = 'https://terraformental.life/games/click/terraformental';

include_header($title, $description, $canonical_url);
?>

    <!-- Main Content -->
    <main class="container mx-auto px-4 pt-24">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <!-- Game Header -->
            <div class="flex flex-col md:flex-row gap-8 mb-8">
                <div class="w-full md:w-3/4">
                    <div class="game-container relative rounded-lg overflow-hidden">
                        <iframe src="https://html-classic.itch.zone/html/13107880/index.html" class="game-iframe" allowfullscreen></iframe>
                        <button class="fullscreen-btn">
                            <i class="fas fa-expand"></i>
                        </button>
                    </div>
                </div>
                <div class="w-full md:w-1/4">
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h1 class="text-2xl font-bold mb-4">Terraformental</h1>
                        <div class="flex items-center gap-4 text-sm text-gray-600 mb-6">
                            <span><i class="fas fa-user"></i> 16.6kh</span>
                            <span><i class="fas fa-heart"></i> 422</span>
                            <span><i class="fas fa-star"></i> 4.7</span>
                        </div>
                        <div class="space-y-4">
                            <button class="w-full btn-primary">
                                <i class="fas fa-heart mr-2"></i>Add to Favorites
                            </button>
                            <button class="w-full btn-secondary">
                                <i class="fas fa-share mr-2"></i>Share Game
                            </button>
                            <a href="https://ko-fi.com/terraformental" target="_blank" class="w-full btn-primary block text-center">
                                <i class="fas fa-coffee mr-2"></i>Support Developer
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Game Description -->
            <div class="prose max-w-none">
                <h2 class="text-xl font-bold mb-4">About Terraformental</h2>
                <p class="mb-4">
                    Terraformental is an engaging idle game that puts you in charge of transforming and developing your own world. 
                    Start with basic resources and gradually unlock new technologies, buildings, and possibilities as you progress through the game.
                </p>
                
                <h3 class="text-lg font-bold mb-3">Key Features</h3>
                <ul class="list-disc pl-6 mb-6">
                    <li>Unique resource management system</li>
                    <li>Multiple upgrade paths and technologies</li>
                    <li>Beautiful pixel art graphics</li>
                    <li>Regular content updates</li>
                    <li>Active community and developer support</li>
                </ul>

                <h3 class="text-lg font-bold mb-3">How to Play</h3>
                <p class="mb-4">
                    Begin your journey by collecting basic resources. Use these resources to construct buildings and research new technologies.
                    As you progress, you'll unlock more advanced features and face new challenges. The game automatically saves your progress,
                    allowing you to return at any time to continue your world's development.
                </p>

                <h3 class="text-lg font-bold mb-3">Tips for Success</h3>
                <ul class="list-disc pl-6 mb-6">
                    <li>Focus on upgrading your basic resource generators first</li>
                    <li>Keep an eye on your resource ratios</li>
                    <li>Don't forget to check for new research opportunities</li>
                    <li>Join the community to learn advanced strategies</li>
                </ul>
            </div>

            <!-- Similar Games -->
            <div class="mt-12">
                <h2 class="text-xl font-bold mb-6">Similar Games You Might Enjoy</h2>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <a href="./points-progression.html" class="game-card bg-white rounded-lg overflow-hidden shadow-lg">
                        <div class="relative">
                            <div class="w-full h-48 bg-gradient-to-br from-gray-900 to-gray-700"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80">
                                <h3 class="text-white font-semibold">Points Progression</h3>
                                <div class="flex items-center gap-4 text-sm text-gray-300 mt-2">
                                    <span><i class="fas fa-user"></i> 4.32kh</span>
                                    <span><i class="fas fa-heart"></i> 27</span>
                                    <span class="ml-auto">2.9 <i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="./botnet.html" class="game-card bg-white rounded-lg overflow-hidden shadow-lg">
                        <div class="relative">
                            <div class="w-full h-48 bg-gradient-to-br from-green-900 to-green-700"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80">
                                <h3 class="text-white font-semibold">Botnet Clicker</h3>
                                <div class="flex items-center gap-4 text-sm text-gray-300 mt-2">
                                    <span><i class="fas fa-user"></i> 1.32kh</span>
                                    <span><i class="fas fa-heart"></i> 29</span>
                                    <span class="ml-auto">3.2 <i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="./ram-idle.html" class="game-card bg-white rounded-lg overflow-hidden shadow-lg">
                        <div class="relative">
                            <div class="w-full h-48 bg-gradient-to-br from-green-600 to-emerald-600"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80">
                                <h3 class="text-white font-semibold">Download RAM Idle</h3>
                                <div class="flex items-center gap-4 text-sm text-gray-300 mt-2">
                                    <span><i class="fas fa-user"></i> 58.5kh</span>
                                    <span><i class="fas fa-heart"></i> 799</span>
                                    <span class="ml-auto">4.7 <i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="./prestige-tree.html" class="game-card bg-white rounded-lg overflow-hidden shadow-lg">
                        <div class="relative">
                            <div class="w-full h-48 bg-gradient-to-br from-purple-800 to-purple-600"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80">
                                <h3 class="text-white font-semibold">Prestige Tree</h3>
                                <div class="flex items-center gap-4 text-sm text-gray-300 mt-2">
                                    <span><i class="fas fa-user"></i> 44.1kh</span>
                                    <span><i class="fas fa-heart"></i> 329</span>
                                    <span class="ml-auto">4.7 <i class="fas fa-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>

<?php include_footer(); ?> 