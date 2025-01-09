<?php

namespace Sunaoka\Aws\Structures\GameLift\ListGameServerGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $Limit
 * @property string $NextToken
 */
class ListGameServerGroupsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
