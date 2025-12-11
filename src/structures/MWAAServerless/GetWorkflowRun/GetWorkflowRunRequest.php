<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\GetWorkflowRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkflowArn
 * @property string $RunId
 */
class GetWorkflowRunRequest extends Request
{
    /**
     * @param array{
     *     WorkflowArn: string,
     *     RunId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
