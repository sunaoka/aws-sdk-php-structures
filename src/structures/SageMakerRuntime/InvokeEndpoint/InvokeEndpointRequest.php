<?php

namespace Sunaoka\Aws\Structures\SageMakerRuntime\InvokeEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 * @property string|resource|\Psr\Http\Message\StreamInterface $Body
 * @property string|null $ContentType
 * @property string|null $Accept
 * @property string|null $CustomAttributes
 * @property string|null $TargetModel
 * @property string|null $TargetVariant
 * @property string|null $TargetContainerHostname
 * @property string|null $InferenceId
 * @property string|null $EnableExplanations
 * @property string|null $InferenceComponentName
 * @property string|null $SessionId
 */
class InvokeEndpointRequest extends Request
{
    /**
     * @param array{
     *     EndpointName: string,
     *     Body: string|resource|\Psr\Http\Message\StreamInterface,
     *     ContentType?: string|null,
     *     Accept?: string|null,
     *     CustomAttributes?: string|null,
     *     TargetModel?: string|null,
     *     TargetVariant?: string|null,
     *     TargetContainerHostname?: string|null,
     *     InferenceId?: string|null,
     *     EnableExplanations?: string|null,
     *     InferenceComponentName?: string|null,
     *     SessionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
