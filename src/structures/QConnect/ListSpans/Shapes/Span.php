<?php

namespace Sunaoka\Aws\Structures\QConnect\ListSpans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $spanId
 * @property string $assistantId
 * @property string $sessionId
 * @property string|null $parentSpanId
 * @property string $spanName
 * @property 'CLIENT'|'SERVER'|'INTERNAL' $spanType
 * @property \Aws\Api\DateTimeResult $startTimestamp
 * @property \Aws\Api\DateTimeResult $endTimestamp
 * @property 'OK'|'ERROR'|'TIMEOUT' $status
 * @property string $requestId
 * @property SpanAttributes $attributes
 */
class Span extends Shape
{
    /**
     * @param array{
     *     spanId: string,
     *     assistantId: string,
     *     sessionId: string,
     *     parentSpanId?: string|null,
     *     spanName: string,
     *     spanType: 'CLIENT'|'SERVER'|'INTERNAL',
     *     startTimestamp: \Aws\Api\DateTimeResult,
     *     endTimestamp: \Aws\Api\DateTimeResult,
     *     status: 'OK'|'ERROR'|'TIMEOUT',
     *     requestId: string,
     *     attributes: SpanAttributes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
