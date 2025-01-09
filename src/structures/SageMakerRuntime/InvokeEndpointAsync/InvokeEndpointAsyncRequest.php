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
 * @property int $RequestTTLSeconds
 * @property int $InvocationTimeoutSeconds
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
     *     RequestTTLSeconds?: int,
     *     InvocationTimeoutSeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
