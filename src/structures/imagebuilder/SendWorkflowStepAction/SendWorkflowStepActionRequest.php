<?php

namespace Sunaoka\Aws\Structures\imagebuilder\SendWorkflowStepAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stepExecutionId
 * @property string $imageBuildVersionArn
 * @property 'RESUME'|'STOP' $action
 * @property string|null $reason
 * @property string $clientToken
 */
class SendWorkflowStepActionRequest extends Request
{
    /**
     * @param array{
     *     stepExecutionId: string,
     *     imageBuildVersionArn: string,
     *     action: 'RESUME'|'STOP',
     *     reason?: string|null,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
