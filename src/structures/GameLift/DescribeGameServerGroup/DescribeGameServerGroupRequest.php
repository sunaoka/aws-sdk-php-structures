<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameServerGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameServerGroupName
 */
class DescribeGameServerGroupRequest extends Request
{
    /**
     * @param array{GameServerGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
