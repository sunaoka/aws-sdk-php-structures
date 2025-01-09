<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFlowDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlowDefinitionName
 */
class DescribeFlowDefinitionRequest extends Request
{
    /**
     * @param array{FlowDefinitionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
