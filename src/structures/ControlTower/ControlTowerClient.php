<?php

namespace Sunaoka\Aws\Structures\ControlTower;

class ControlTowerClient extends \Aws\ControlTower\ControlTowerClient
{
    use DisableControl\DisableControlTrait;
    use EnableControl\EnableControlTrait;
    use GetControlOperation\GetControlOperationTrait;
    use ListEnabledControls\ListEnabledControlsTrait;
}
