<?php

namespace Sunaoka\Aws\Structures\Swf\UndeprecateWorkflowType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property Shapes\WorkflowType $workflowType
 */
class UndeprecateWorkflowTypeRequest extends Request
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
