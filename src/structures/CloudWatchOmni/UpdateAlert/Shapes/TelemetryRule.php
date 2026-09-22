<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\UpdateAlert\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AlertRuleQuery|null $query
 * @property AlertCondition|null $condition
 * @property AlertEvaluation|null $evaluation
 * @property NoData|null $noData
 */
class TelemetryRule extends Shape
{
    /**
     * @param array{
     *     query?: AlertRuleQuery|null,
     *     condition?: AlertCondition|null,
     *     evaluation?: AlertEvaluation|null,
     *     noData?: NoData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
