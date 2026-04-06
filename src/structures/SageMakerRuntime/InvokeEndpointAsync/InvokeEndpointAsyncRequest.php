<?php

namespace Sunaoka\Aws\Structures\SageMakerRuntime\InvokeEndpointAsync;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 * @property string|null $ContentType
 * @property string|null $Accept
 * @property string|null $CustomAttributes
 * @property string|null $InferenceId
 * @property string $InputLocation
 * @property string|null $S3OutputPathExtension
 * @property string|null $Filename
 * @property int<60, 21600>|null $RequestTTLSeconds
 * @property int<1, 3600>|null $InvocationTimeoutSeconds
 */
class InvokeEndpointAsyncRequest extends Request
{
    /**
     * @param array{
     *     EndpointName: string,
     *     ContentType?: string|null,
     *     Accept?: string|null,
     *     CustomAttributes?: string|null,
     *     InferenceId?: string|null,
     *     InputLocation: string,
     *     S3OutputPathExtension?: string|null,
     *     Filename?: string|null,
     *     RequestTTLSeconds?: int<60, 21600>|null,
     *     InvocationTimeoutSeconds?: int<1, 3600>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
