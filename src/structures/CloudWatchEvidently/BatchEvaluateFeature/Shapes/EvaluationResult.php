<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\BatchEvaluateFeature\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $details
 * @property string $entityId
 * @property string $feature
 * @property string $project
 * @property string $reason
 * @property VariableValue $value
 * @property string $variation
 */
class EvaluationResult extends Shape
{
    /**
     * @param array{
     *     details?: string,
     *     entityId: string,
     *     feature: string,
     *     project?: string,
     *     reason?: string,
     *     value?: VariableValue,
     *     variation?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
