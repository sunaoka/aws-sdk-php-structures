<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $traceId
 * @property string|null $failureReason
 * @property int|null $failureCode
 * @property Metadata|null $metadata
 */
class FailureTrace extends Shape
{
    /**
     * @param array{
     *     traceId?: string|null,
     *     failureReason?: string|null,
     *     failureCode?: int|null,
     *     metadata?: Metadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
