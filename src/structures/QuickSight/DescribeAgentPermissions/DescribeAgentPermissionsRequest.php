<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAgentPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AgentId
 * @property string $AwsAccountId
 */
class DescribeAgentPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AgentId: string,
     *     AwsAccountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
