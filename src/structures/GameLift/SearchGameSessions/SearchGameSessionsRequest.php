<?php

namespace Sunaoka\Aws\Structures\GameLift\SearchGameSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property string $AliasId
 * @property string $Location
 * @property string $FilterExpression
 * @property string $SortExpression
 * @property int $Limit
 * @property string $NextToken
 */
class SearchGameSessionsRequest extends Request
{
    /**
     * @param array{
     *     FleetId?: string,
     *     AliasId?: string,
     *     Location?: string,
     *     FilterExpression?: string,
     *     SortExpression?: string,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
