<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateFleetCapacity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property int<0, max>|null $DesiredInstances
 * @property int<0, max>|null $MinSize
 * @property int<0, max>|null $MaxSize
 * @property string|null $Location
 */
class UpdateFleetCapacityRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     DesiredInstances?: int<0, max>|null,
     *     MinSize?: int<0, max>|null,
     *     MaxSize?: int<0, max>|null,
     *     Location?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
