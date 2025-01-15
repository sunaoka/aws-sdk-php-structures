<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetLocationUtilization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FleetId
 * @property string|null $FleetArn
 * @property int<0, max>|null $ActiveServerProcessCount
 * @property int<0, max>|null $ActiveGameSessionCount
 * @property int<0, max>|null $CurrentPlayerSessionCount
 * @property int<0, max>|null $MaximumPlayerSessionCount
 * @property string|null $Location
 */
class FleetUtilization extends Shape
{
    /**
     * @param array{
     *     FleetId?: string|null,
     *     FleetArn?: string|null,
     *     ActiveServerProcessCount?: int<0, max>|null,
     *     ActiveGameSessionCount?: int<0, max>|null,
     *     CurrentPlayerSessionCount?: int<0, max>|null,
     *     MaximumPlayerSessionCount?: int<0, max>|null,
     *     Location?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
