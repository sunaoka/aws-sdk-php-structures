<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $targetId
 * @property 'SPAN_ID'|'TRACE_ID'|'SPAN_NAME'|null $targetType
 * @property string $description
 * @property string|null $category
 * @property double|null $confidence
 */
class SessionFinding extends Shape
{
    /**
     * @param array{
     *     targetId?: string|null,
     *     targetType?: 'SPAN_ID'|'TRACE_ID'|'SPAN_NAME'|null,
     *     description: string,
     *     category?: string|null,
     *     confidence?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
