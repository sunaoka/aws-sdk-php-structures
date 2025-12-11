<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\GetWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkflowArn
 * @property string|null $WorkflowVersion
 */
class GetWorkflowRequest extends Request
{
    /**
     * @param array{
     *     WorkflowArn: string,
     *     WorkflowVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
