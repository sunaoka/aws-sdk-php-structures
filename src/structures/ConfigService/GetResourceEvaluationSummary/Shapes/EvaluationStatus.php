<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetResourceEvaluationSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED' $Status
 * @property string|null $FailureReason
 */
class EvaluationStatus extends Shape
{
    /**
     * @param array{
     *     Status: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED',
     *     FailureReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
