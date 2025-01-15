<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property string|null $InstanceId
 * @property int<1, max>|null $Limit
 * @property string|null $NextToken
 * @property string|null $Location
 */
class DescribeInstancesRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     InstanceId?: string|null,
     *     Limit?: int<1, max>|null,
     *     NextToken?: string|null,
     *     Location?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
