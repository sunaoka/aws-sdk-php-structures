<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property string $GameSessionId
 * @property string $AliasId
 * @property string $Location
 * @property string $StatusFilter
 * @property int $Limit
 * @property string $NextToken
 */
class DescribeGameSessionsRequest extends Request
{
    /**
     * @param array{
     *     FleetId?: string,
     *     GameSessionId?: string,
     *     AliasId?: string,
     *     Location?: string,
     *     StatusFilter?: string,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
