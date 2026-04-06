<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\Evaluate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionId
 * @property string|null $traceId
 * @property string|null $spanId
 */
class SpanContext extends Shape
{
    /**
     * @param array{
     *     sessionId: string,
     *     traceId?: string|null,
     *     spanId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
