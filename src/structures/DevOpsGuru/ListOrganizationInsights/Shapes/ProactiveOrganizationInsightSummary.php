<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListOrganizationInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $AccountId
 * @property string $OrganizationalUnitId
 * @property string $Name
 * @property 'LOW'|'MEDIUM'|'HIGH' $Severity
 * @property 'ONGOING'|'CLOSED' $Status
 * @property InsightTimeRange $InsightTimeRange
 * @property PredictionTimeRange $PredictionTimeRange
 * @property ResourceCollection $ResourceCollection
 * @property ServiceCollection $ServiceCollection
 */
class ProactiveOrganizationInsightSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     AccountId?: string,
     *     OrganizationalUnitId?: string,
     *     Name?: string,
     *     Severity?: 'LOW'|'MEDIUM'|'HIGH',
     *     Status?: 'ONGOING'|'CLOSED',
     *     InsightTimeRange?: InsightTimeRange,
     *     PredictionTimeRange?: PredictionTimeRange,
     *     ResourceCollection?: ResourceCollection,
     *     ServiceCollection?: ServiceCollection
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
