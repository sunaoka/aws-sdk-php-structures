<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\StopWorkflowRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkflowArn
 * @property string $RunId
 */
class StopWorkflowRunRequest extends Request
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
