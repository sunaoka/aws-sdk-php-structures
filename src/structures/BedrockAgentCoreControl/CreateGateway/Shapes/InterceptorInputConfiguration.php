<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $passRequestHeaders
 * @property InterceptorPayloadFilter|null $payloadFilter
 */
class InterceptorInputConfiguration extends Shape
{
    /**
     * @param array{
     *     passRequestHeaders: bool,
     *     payloadFilter?: InterceptorPayloadFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
