<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $failureCode
 * @property string|null $failureReason
 * @property Metadata|null $metadata
 * @property string|null $traceId
 */
class FailureTrace extends Shape
{
    /**
     * @param array{
     *     failureCode?: int|null,
     *     failureReason?: string|null,
     *     metadata?: Metadata|null,
     *     traceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
