<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspacesPoolSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolId
 * @property string|null $UserId
 * @property int<1, 50>|null $Limit
 * @property string|null $NextToken
 */
class DescribeWorkspacesPoolSessionsRequest extends Request
{
    /**
     * @param array{
     *     PoolId: string,
     *     UserId?: string|null,
     *     Limit?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
