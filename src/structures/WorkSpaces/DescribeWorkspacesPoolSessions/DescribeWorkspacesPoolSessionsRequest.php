<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspacesPoolSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolId
 * @property string $UserId
 * @property int $Limit
 * @property string $NextToken
 */
class DescribeWorkspacesPoolSessionsRequest extends Request
{
    /**
     * @param array{
     *     PoolId: string,
     *     UserId?: string,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
