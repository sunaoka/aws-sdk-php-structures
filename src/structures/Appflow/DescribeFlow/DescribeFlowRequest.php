<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowName
 */
class DescribeFlowRequest extends Request
{
    /**
     * @param array{flowName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
