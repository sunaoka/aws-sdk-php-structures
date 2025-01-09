<?php

namespace Sunaoka\Aws\Structures\GameLift\ListGameServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameServerGroupName
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 * @property int<1, max> $Limit
 * @property string $NextToken
 */
class ListGameServersRequest extends Request
{
    /**
     * @param array{
     *     GameServerGroupName: string,
     *     SortOrder?: 'ASCENDING'|'DESCENDING',
     *     Limit?: int<1, max>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
