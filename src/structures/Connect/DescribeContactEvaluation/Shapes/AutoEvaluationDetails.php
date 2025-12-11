<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AutoEvaluationEnabled
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null $AutoEvaluationStatus
 */
class AutoEvaluationDetails extends Shape
{
    /**
     * @param array{
     *     AutoEvaluationEnabled: bool,
     *     AutoEvaluationStatus?: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
