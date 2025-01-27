### Game State Flowchart

```mermaid
flowchart TD;
    A["Show video game title screen"] -- Title Screen --> 
    B("Start New Game");
    B --> C{"Choose Your Character"};
    C -- Warrior --> D["Show the warrior character"] -->G;
    C -- Mage --> E["Show the mage character"] -->G;
    C -- Rogue --> F["Show the rogue character"] --> G;
    G["Start game with character"];
    G@{ shape: rect};
```

## Description
This diagram shows the relationship of events when launching a video game where you can play as different characters. After the title screen is shown, the option to select a character appears, allowing the player to view the character before starting the game with them. 
