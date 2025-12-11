<?php

namespace Sunaoka\Aws\Structures\NovaAct\GetWorkflowDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowDefinitionName
 */
class GetWorkflowDefinitionRequest extends Request
{
    /**
     * @param array{workflowDefinitionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
