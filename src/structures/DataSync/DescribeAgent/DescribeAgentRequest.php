<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AgentArn
 */
class DescribeAgentRequest extends Request
{
    /**
     * @param array{AgentArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
