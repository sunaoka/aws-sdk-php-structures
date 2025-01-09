<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeAgentStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $AgentStatusId
 */
class DescribeAgentStatusRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     AgentStatusId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
