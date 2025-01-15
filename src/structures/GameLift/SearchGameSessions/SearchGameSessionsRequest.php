<?php

namespace Sunaoka\Aws\Structures\GameLift\SearchGameSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FleetId
 * @property string|null $AliasId
 * @property string|null $Location
 * @property string|null $FilterExpression
 * @property string|null $SortExpression
 * @property int<1, max>|null $Limit
 * @property string|null $NextToken
 */
class SearchGameSessionsRequest extends Request
{
    /**
     * @param array{
     *     FleetId?: string|null,
     *     AliasId?: string|null,
     *     Location?: string|null,
     *     FilterExpression?: string|null,
     *     SortExpression?: string|null,
     *     Limit?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
