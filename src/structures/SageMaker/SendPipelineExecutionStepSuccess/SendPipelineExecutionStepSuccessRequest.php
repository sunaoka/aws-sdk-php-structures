<?php

namespace Sunaoka\Aws\Structures\SageMaker\SendPipelineExecutionStepSuccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CallbackToken
 * @property list<Shapes\OutputParameter> $OutputParameters
 * @property string $ClientRequestToken
 */
class SendPipelineExecutionStepSuccessRequest extends Request
{
    /**
     * @param array{
     *     CallbackToken: string,
     *     OutputParameters?: list<Shapes\OutputParameter>,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
