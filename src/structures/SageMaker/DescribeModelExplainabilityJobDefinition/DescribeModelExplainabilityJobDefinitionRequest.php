<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelExplainabilityJobDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobDefinitionName
 */
class DescribeModelExplainabilityJobDefinitionRequest extends Request
{
    /**
     * @param array{JobDefinitionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
