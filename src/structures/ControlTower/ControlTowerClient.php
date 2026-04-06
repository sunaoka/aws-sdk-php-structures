<?php

namespace Sunaoka\Aws\Structures\ControlTower;

class ControlTowerClient extends \Aws\ControlTower\ControlTowerClient
{
    use CreateLandingZone\CreateLandingZoneTrait;
    use DeleteLandingZone\DeleteLandingZoneTrait;
    use DisableBaseline\DisableBaselineTrait;
    use DisableControl\DisableControlTrait;
    use EnableBaseline\EnableBaselineTrait;
    use EnableControl\EnableControlTrait;
    use GetBaseline\GetBaselineTrait;
    use GetBaselineOperation\GetBaselineOperationTrait;
    use GetControlOperation\GetControlOperationTrait;
    use GetEnabledBaseline\GetEnabledBaselineTrait;
    use GetEnabledControl\GetEnabledControlTrait;
    use GetLandingZone\GetLandingZoneTrait;
    use GetLandingZoneOperation\GetLandingZoneOperationTrait;
    use ListBaselines\ListBaselinesTrait;
    use ListControlOperations\ListControlOperationsTrait;
    use ListEnabledBaselines\ListEnabledBaselinesTrait;
    use ListEnabledControls\ListEnabledControlsTrait;
    use ListLandingZoneOperations\ListLandingZoneOperationsTrait;
    use ListLandingZones\ListLandingZonesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ResetEnabledBaseline\ResetEnabledBaselineTrait;
    use ResetEnabledControl\ResetEnabledControlTrait;
    use ResetLandingZone\ResetLandingZoneTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateEnabledBaseline\UpdateEnabledBaselineTrait;
    use UpdateEnabledControl\UpdateEnabledControlTrait;
    use UpdateLandingZone\UpdateLandingZoneTrait;
}
