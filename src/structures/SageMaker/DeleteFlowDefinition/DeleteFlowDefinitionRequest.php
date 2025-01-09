<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteFlowDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlowDefinitionName
 */
class DeleteFlowDefinitionRequest extends Request
{
    /**
     * @param array{FlowDefinitionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
