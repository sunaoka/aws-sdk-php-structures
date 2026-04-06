<?php

namespace Sunaoka\Aws\Structures\Swf\DeleteWorkflowType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property Shapes\WorkflowType $workflowType
 */
class DeleteWorkflowTypeRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     workflowType: Shapes\WorkflowType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
