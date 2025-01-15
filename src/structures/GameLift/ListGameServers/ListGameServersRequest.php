<?php

namespace Sunaoka\Aws\Structures\GameLift\ListGameServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameServerGroupName
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 * @property int<1, max>|null $Limit
 * @property string|null $NextToken
 */
class ListGameServersRequest extends Request
{
    /**
     * @param array{
     *     GameServerGroupName: string,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     Limit?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
