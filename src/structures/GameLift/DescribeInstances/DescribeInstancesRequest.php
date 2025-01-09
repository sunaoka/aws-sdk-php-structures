<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property string $InstanceId
 * @property int<1, max> $Limit
 * @property string $NextToken
 * @property string $Location
 */
class DescribeInstancesRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     InstanceId?: string,
     *     Limit?: int<1, max>,
     *     NextToken?: string,
     *     Location?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
