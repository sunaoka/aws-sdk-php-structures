<?php

namespace Sunaoka\Aws\Structures\SageMakerRuntime\InvokeEndpointWithResponseStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 * @property string $Body
 * @property string $ContentType
 * @property string $Accept
 * @property string $CustomAttributes
 * @property string $TargetVariant
 * @property string $TargetContainerHostname
 * @property string $InferenceId
 * @property string $InferenceComponentName
 * @property string $SessionId
 */
class InvokeEndpointWithResponseStreamRequest extends Request
{
    /**
     * @param array{
     *     EndpointName: string,
     *     Body: string,
     *     ContentType?: string,
     *     Accept?: string,
     *     CustomAttributes?: string,
     *     TargetVariant?: string,
     *     TargetContainerHostname?: string,
     *     InferenceId?: string,
     *     InferenceComponentName?: string,
     *     SessionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
