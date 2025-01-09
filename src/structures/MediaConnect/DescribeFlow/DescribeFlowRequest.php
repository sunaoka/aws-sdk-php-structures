<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlowArn
 */
class DescribeFlowRequest extends Request
{
    /**
     * @param array{FlowArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
