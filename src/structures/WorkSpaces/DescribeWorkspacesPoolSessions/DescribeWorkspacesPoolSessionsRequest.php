<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspacesPoolSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolId
 * @property string $UserId
 * @property int<1, 50> $Limit
 * @property string $NextToken
 */
class DescribeWorkspacesPoolSessionsRequest extends Request
{
    /**
     * @param array{
     *     PoolId: string,
     *     UserId?: string,
     *     Limit?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
