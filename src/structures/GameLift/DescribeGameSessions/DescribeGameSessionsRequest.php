<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FleetId
 * @property string|null $GameSessionId
 * @property string|null $AliasId
 * @property string|null $Location
 * @property string|null $StatusFilter
 * @property int<1, max>|null $Limit
 * @property string|null $NextToken
 */
class DescribeGameSessionsRequest extends Request
{
    /**
     * @param array{
     *     FleetId?: string|null,
     *     GameSessionId?: string|null,
     *     AliasId?: string|null,
     *     Location?: string|null,
     *     StatusFilter?: string|null,
     *     Limit?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
