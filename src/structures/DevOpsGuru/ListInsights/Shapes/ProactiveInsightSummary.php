<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property 'LOW'|'MEDIUM'|'HIGH' $Severity
 * @property 'ONGOING'|'CLOSED' $Status
 * @property InsightTimeRange $InsightTimeRange
 * @property PredictionTimeRange $PredictionTimeRange
 * @property ResourceCollection $ResourceCollection
 * @property ServiceCollection $ServiceCollection
 * @property list<string> $AssociatedResourceArns
 */
class ProactiveInsightSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Severity?: 'LOW'|'MEDIUM'|'HIGH',
     *     Status?: 'ONGOING'|'CLOSED',
     *     InsightTimeRange?: InsightTimeRange,
     *     PredictionTimeRange?: PredictionTimeRange,
     *     ResourceCollection?: ResourceCollection,
     *     ServiceCollection?: ServiceCollection,
     *     AssociatedResourceArns?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
