<?php

namespace Sunaoka\Aws\Structures\SageMaker\SendPipelineExecutionStepFailure;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CallbackToken
 * @property string $FailureReason
 * @property string $ClientRequestToken
 */
class SendPipelineExecutionStepFailureRequest extends Request
{
    /**
     * @param array{
     *     CallbackToken: string,
     *     FailureReason?: string,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
