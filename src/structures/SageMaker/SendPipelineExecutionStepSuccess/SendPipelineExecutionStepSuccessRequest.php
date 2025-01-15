<?php

namespace Sunaoka\Aws\Structures\SageMaker\SendPipelineExecutionStepSuccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CallbackToken
 * @property list<Shapes\OutputParameter>|null $OutputParameters
 * @property string|null $ClientRequestToken
 */
class SendPipelineExecutionStepSuccessRequest extends Request
{
    /**
     * @param array{
     *     CallbackToken: string,
     *     OutputParameters?: list<Shapes\OutputParameter>|null,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
