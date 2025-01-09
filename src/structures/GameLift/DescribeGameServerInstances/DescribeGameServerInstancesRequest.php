<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameServerInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameServerGroupName
 * @property list<string> $InstanceIds
 * @property int $Limit
 * @property string $NextToken
 */
class DescribeGameServerInstancesRequest extends Request
{
    /**
     * @param array{
     *     GameServerGroupName: string,
     *     InstanceIds?: list<string>,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
