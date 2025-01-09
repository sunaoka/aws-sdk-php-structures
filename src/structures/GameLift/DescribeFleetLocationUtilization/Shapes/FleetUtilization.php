<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetLocationUtilization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FleetId
 * @property string $FleetArn
 * @property int $ActiveServerProcessCount
 * @property int $ActiveGameSessionCount
 * @property int $CurrentPlayerSessionCount
 * @property int $MaximumPlayerSessionCount
 * @property string $Location
 */
class FleetUtilization extends Shape
{
    /**
     * @param array{
     *     FleetId?: string,
     *     FleetArn?: string,
     *     ActiveServerProcessCount?: int,
     *     ActiveGameSessionCount?: int,
     *     CurrentPlayerSessionCount?: int,
     *     MaximumPlayerSessionCount?: int,
     *     Location?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
