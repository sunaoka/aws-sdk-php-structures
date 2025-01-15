<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListOrganizationInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $AccountId
 * @property string|null $OrganizationalUnitId
 * @property string|null $Name
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $Severity
 * @property 'ONGOING'|'CLOSED'|null $Status
 * @property InsightTimeRange|null $InsightTimeRange
 * @property PredictionTimeRange|null $PredictionTimeRange
 * @property ResourceCollection|null $ResourceCollection
 * @property ServiceCollection|null $ServiceCollection
 */
class ProactiveOrganizationInsightSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     AccountId?: string|null,
     *     OrganizationalUnitId?: string|null,
     *     Name?: string|null,
     *     Severity?: 'LOW'|'MEDIUM'|'HIGH'|null,
     *     Status?: 'ONGOING'|'CLOSED'|null,
     *     InsightTimeRange?: InsightTimeRange|null,
     *     PredictionTimeRange?: PredictionTimeRange|null,
     *     ResourceCollection?: ResourceCollection|null,
     *     ServiceCollection?: ServiceCollection|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
