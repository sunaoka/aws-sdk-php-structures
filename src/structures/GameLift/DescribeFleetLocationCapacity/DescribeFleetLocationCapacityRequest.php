<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetLocationCapacity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property string $Location
 */
class DescribeFleetLocationCapacityRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     Location: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
