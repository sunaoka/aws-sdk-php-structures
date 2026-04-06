<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationRulePreviewSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property RulePreviewTotal $total
 */
class PreviewResultSummary extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     total: RulePreviewTotal
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
