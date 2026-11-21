<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InterceptorConfiguration $interceptor
 * @property list<'REQUEST'|'RESPONSE'> $interceptionPoints
 * @property InterceptorInputConfiguration|null $inputConfiguration
 * @property 'BUFFERED'|'STREAM'|null $responseInterceptionMode
 * @property ResponseStreamingConfiguration|null $responseStreamingConfiguration
 */
class GatewayInterceptorConfiguration extends Shape
{
    /**
     * @param array{
     *     interceptor: InterceptorConfiguration,
     *     interceptionPoints: list<'REQUEST'|'RESPONSE'>,
     *     inputConfiguration?: InterceptorInputConfiguration|null,
     *     responseInterceptionMode?: 'BUFFERED'|'STREAM'|null,
     *     responseStreamingConfiguration?: ResponseStreamingConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
