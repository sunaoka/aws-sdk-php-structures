<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribePlayerSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameSessionId
 * @property string $PlayerId
 * @property string $PlayerSessionId
 * @property string $PlayerSessionStatusFilter
 * @property int<1, max> $Limit
 * @property string $NextToken
 */
class DescribePlayerSessionsRequest extends Request
{
    /**
     * @param array{
     *     GameSessionId?: string,
     *     PlayerId?: string,
     *     PlayerSessionId?: string,
     *     PlayerSessionStatusFilter?: string,
     *     Limit?: int<1, max>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
