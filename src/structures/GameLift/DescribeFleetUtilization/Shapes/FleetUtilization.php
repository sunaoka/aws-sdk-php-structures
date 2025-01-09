<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetUtilization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FleetId
 * @property string $FleetArn
 * @property int<0, max> $ActiveServerProcessCount
 * @property int<0, max> $ActiveGameSessionCount
 * @property int<0, max> $CurrentPlayerSessionCount
 * @property int<0, max> $MaximumPlayerSessionCount
 * @property string $Location
 */
class FleetUtilization extends Shape
{
    /**
     * @param array{
     *     FleetId?: string,
     *     FleetArn?: string,
     *     ActiveServerProcessCount?: int<0, max>,
     *     ActiveGameSessionCount?: int<0, max>,
     *     CurrentPlayerSessionCount?: int<0, max>,
     *     MaximumPlayerSessionCount?: int<0, max>,
     *     Location?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
