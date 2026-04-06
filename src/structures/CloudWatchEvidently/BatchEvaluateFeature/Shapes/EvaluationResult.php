<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\BatchEvaluateFeature\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $details
 * @property string $entityId
 * @property string $feature
 * @property string|null $project
 * @property string|null $reason
 * @property VariableValue|null $value
 * @property string|null $variation
 */
class EvaluationResult extends Shape
{
    /**
     * @param array{
     *     details?: string|null,
     *     entityId: string,
     *     feature: string,
     *     project?: string|null,
     *     reason?: string|null,
     *     value?: VariableValue|null,
     *     variation?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
