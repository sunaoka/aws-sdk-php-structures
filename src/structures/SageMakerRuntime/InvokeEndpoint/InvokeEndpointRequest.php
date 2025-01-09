<?php

namespace Sunaoka\Aws\Structures\SageMakerRuntime\InvokeEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 * @property string $Body
 * @property string $ContentType
 * @property string $Accept
 * @property string $CustomAttributes
 * @property string $TargetModel
 * @property string $TargetVariant
 * @property string $TargetContainerHostname
 * @property string $InferenceId
 * @property string $EnableExplanations
 * @property string $InferenceComponentName
 * @property string $SessionId
 */
class InvokeEndpointRequest extends Request
{
    /**
     * @param array{
     *     EndpointName: string,
     *     Body: string,
     *     ContentType?: string,
     *     Accept?: string,
     *     CustomAttributes?: string,
     *     TargetModel?: string,
     *     TargetVariant?: string,
     *     TargetContainerHostname?: string,
     *     InferenceId?: string,
     *     EnableExplanations?: string,
     *     InferenceComponentName?: string,
     *     SessionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
