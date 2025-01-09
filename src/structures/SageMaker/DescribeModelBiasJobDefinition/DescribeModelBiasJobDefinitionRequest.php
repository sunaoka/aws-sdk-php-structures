<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelBiasJobDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobDefinitionName
 */
class DescribeModelBiasJobDefinitionRequest extends Request
{
    /**
     * @param array{JobDefinitionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
