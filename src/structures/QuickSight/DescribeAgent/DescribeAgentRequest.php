<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AgentId
 * @property string $AwsAccountId
 */
class DescribeAgentRequest extends Request
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
