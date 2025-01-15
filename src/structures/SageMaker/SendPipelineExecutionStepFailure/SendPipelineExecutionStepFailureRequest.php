<?php

namespace Sunaoka\Aws\Structures\SageMaker\SendPipelineExecutionStepFailure;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CallbackToken
 * @property string|null $FailureReason
 * @property string|null $ClientRequestToken
 */
class SendPipelineExecutionStepFailureRequest extends Request
{
    /**
     * @param array{
     *     CallbackToken: string,
     *     FailureReason?: string|null,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
