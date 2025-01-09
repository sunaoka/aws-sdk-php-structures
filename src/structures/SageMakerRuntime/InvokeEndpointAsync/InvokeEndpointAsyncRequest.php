<?php

namespace Sunaoka\Aws\Structures\SageMakerRuntime\InvokeEndpointAsync;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 * @property string $ContentType
 * @property string $Accept
 * @property string $CustomAttributes
 * @property string $InferenceId
 * @property string $InputLocation
 * @property int<60, 21600> $RequestTTLSeconds
 * @property int<1, 3600> $InvocationTimeoutSeconds
 */
class InvokeEndpointAsyncRequest extends Request
{
    /**
     * @param array{
     *     EndpointName: string,
     *     ContentType?: string,
     *     Accept?: string,
     *     CustomAttributes?: string,
     *     InferenceId?: string,
     *     InputLocation: string,
     *     RequestTTLSeconds?: int<60, 21600>,
     *     InvocationTimeoutSeconds?: int<1, 3600>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
