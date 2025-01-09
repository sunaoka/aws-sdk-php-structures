<?php

namespace Sunaoka\Aws\Structures\QuickSight\PredictQAResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DASHBOARD_VISUAL'|'GENERATED_ANSWER'|'NO_ANSWER' $ResultType
 * @property DashboardVisualResult $DashboardVisual
 * @property GeneratedAnswerResult $GeneratedAnswer
 */
class QAResult extends Shape
{
    /**
     * @param array{
     *     ResultType?: 'DASHBOARD_VISUAL'|'GENERATED_ANSWER'|'NO_ANSWER',
     *     DashboardVisual?: DashboardVisualResult,
     *     GeneratedAnswer?: GeneratedAnswerResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
