<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $Severity
 * @property 'ONGOING'|'CLOSED'|null $Status
 * @property InsightTimeRange|null $InsightTimeRange
 * @property ResourceCollection|null $ResourceCollection
 * @property ServiceCollection|null $ServiceCollection
 * @property list<string>|null $AssociatedResourceArns
 */
class ReactiveInsightSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Severity?: 'LOW'|'MEDIUM'|'HIGH'|null,
     *     Status?: 'ONGOING'|'CLOSED'|null,
     *     InsightTimeRange?: InsightTimeRange|null,
     *     ResourceCollection?: ResourceCollection|null,
     *     ServiceCollection?: ServiceCollection|null,
     *     AssociatedResourceArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
