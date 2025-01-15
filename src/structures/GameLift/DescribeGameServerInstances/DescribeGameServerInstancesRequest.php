<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameServerInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameServerGroupName
 * @property list<string>|null $InstanceIds
 * @property int<1, max>|null $Limit
 * @property string|null $NextToken
 */
class DescribeGameServerInstancesRequest extends Request
{
    /**
     * @param array{
     *     GameServerGroupName: string,
     *     InstanceIds?: list<string>|null,
     *     Limit?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
