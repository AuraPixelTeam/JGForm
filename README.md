# JGForm
## About
JGForm is the all in one UI menu plugin!  
You can create UI menus that open with custom commands that will show stats or perform actions specific to the player who opened it.

## Dependency
- [FormAPI](https://github.com/jojoe77777/FormAPI)

## SoftDependency
- EconomyAPI
- CoinAPI
- PointAPI

## Commands
* `/<custom command specified for the Form>`
Open menu
* `/jg list` Lists all menus you have access to  
* `/jgreload` Reloads the menus and settings

## Permissions
* `<permission your menu>`  
Lets you open a menu regardless of if you have the permissions for it.  
Default: OP
* `jgform.menu.*`  
Gives permission for all menus.  
Default: OP

## Configuration Example Shop.yml
```yml
formname: "Shop"
styleform: "simple"
command: "shop"
permission: "jgform.command.shop"
content:
     - "Choose an option:"
buttons:
  - text: "Buy Sword Diamond"
    requirements:
      money:
        type: 'total'
        output: '1000'
    command:
      - ["console", "take money {player} 1000"]
      - ["console", "msg {player} Buy success"]
      - ["console", "give {player} diamond_sword 1"]
    not_enough_requirements:
      money:
        type: 'total'
        output: '1000'
      command:
        - ["console", "msg {player} you dont enough money"]
        - ["console", "kill {player}"]
    image:
      type: "url"
      data: "https://example.com/image1.png"```
