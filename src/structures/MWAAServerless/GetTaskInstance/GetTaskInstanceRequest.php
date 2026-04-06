<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\GetTaskInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkflowArn
 * @property string $TaskInstanceId
 * @property string $RunId
 */
class GetTaskInstanceRequest extends Request
{
    /**
     * @param array{
     *     WorkflowArn: string,
     *     TaskInstanceId: string,
     *     RunId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
