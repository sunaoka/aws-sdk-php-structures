<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribePlayerSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GameSessionId
 * @property string|null $PlayerId
 * @property string|null $PlayerSessionId
 * @property string|null $PlayerSessionStatusFilter
 * @property int<1, max>|null $Limit
 * @property string|null $NextToken
 */
class DescribePlayerSessionsRequest extends Request
{
    /**
     * @param array{
     *     GameSessionId?: string|null,
     *     PlayerId?: string|null,
     *     PlayerSessionId?: string|null,
     *     PlayerSessionStatusFilter?: string|null,
     *     Limit?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
