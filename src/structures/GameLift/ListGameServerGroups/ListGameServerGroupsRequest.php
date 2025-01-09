<?php

namespace Sunaoka\Aws\Structures\GameLift\ListGameServerGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max> $Limit
 * @property string $NextToken
 */
class ListGameServerGroupsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int<1, max>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
