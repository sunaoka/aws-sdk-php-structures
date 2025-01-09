<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteModelExplainabilityJobDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobDefinitionName
 */
class DeleteModelExplainabilityJobDefinitionRequest extends Request
{
    /**
     * @param array{JobDefinitionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
