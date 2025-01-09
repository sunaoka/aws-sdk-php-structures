<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateFleetCapacity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property int $DesiredInstances
 * @property int $MinSize
 * @property int $MaxSize
 * @property string $Location
 */
class UpdateFleetCapacityRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     DesiredInstances?: int,
     *     MinSize?: int,
     *     MaxSize?: int,
     *     Location?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
