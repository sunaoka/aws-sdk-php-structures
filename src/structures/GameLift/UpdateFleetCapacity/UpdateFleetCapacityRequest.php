<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateFleetCapacity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property int<0, max> $DesiredInstances
 * @property int<0, max> $MinSize
 * @property int<0, max> $MaxSize
 * @property string $Location
 */
class UpdateFleetCapacityRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     DesiredInstances?: int<0, max>,
     *     MinSize?: int<0, max>,
     *     MaxSize?: int<0, max>,
     *     Location?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
