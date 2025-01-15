<?php

namespace Sunaoka\Aws\Structures\QuickSight\PredictQAResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DASHBOARD_VISUAL'|'GENERATED_ANSWER'|'NO_ANSWER'|null $ResultType
 * @property DashboardVisualResult|null $DashboardVisual
 * @property GeneratedAnswerResult|null $GeneratedAnswer
 */
class QAResult extends Shape
{
    /**
     * @param array{
     *     ResultType?: 'DASHBOARD_VISUAL'|'GENERATED_ANSWER'|'NO_ANSWER'|null,
     *     DashboardVisual?: DashboardVisualResult|null,
     *     GeneratedAnswer?: GeneratedAnswerResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
