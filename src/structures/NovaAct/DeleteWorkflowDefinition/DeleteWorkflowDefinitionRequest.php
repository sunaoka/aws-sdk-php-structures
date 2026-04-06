<?php

namespace Sunaoka\Aws\Structures\NovaAct\DeleteWorkflowDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowDefinitionName
 */
class DeleteWorkflowDefinitionRequest extends Request
{
    /**
     * @param array{workflowDefinitionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
