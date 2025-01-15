<?php

namespace Sunaoka\Aws\Structures\GameLift\ListGameServerGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max>|null $Limit
 * @property string|null $NextToken
 */
class ListGameServerGroupsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
