<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\BatchEvaluateFeature\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entityId
 * @property string|null $evaluationContext
 * @property string $feature
 */
class EvaluationRequest extends Shape
{
    /**
     * @param array{
     *     entityId: string,
     *     evaluationContext?: string|null,
     *     feature: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
