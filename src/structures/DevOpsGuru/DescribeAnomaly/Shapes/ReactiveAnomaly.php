<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeAnomaly\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $Severity
 * @property 'ONGOING'|'CLOSED'|null $Status
 * @property AnomalyTimeRange|null $AnomalyTimeRange
 * @property AnomalyReportedTimeRange|null $AnomalyReportedTimeRange
 * @property AnomalySourceDetails|null $SourceDetails
 * @property string|null $AssociatedInsightId
 * @property ResourceCollection|null $ResourceCollection
 * @property 'CAUSAL'|'CONTEXTUAL'|null $Type
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $CausalAnomalyId
 * @property list<AnomalyResource>|null $AnomalyResources
 */
class ReactiveAnomaly extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Severity?: 'LOW'|'MEDIUM'|'HIGH'|null,
     *     Status?: 'ONGOING'|'CLOSED'|null,
     *     AnomalyTimeRange?: AnomalyTimeRange|null,
     *     AnomalyReportedTimeRange?: AnomalyReportedTimeRange|null,
     *     SourceDetails?: AnomalySourceDetails|null,
     *     AssociatedInsightId?: string|null,
     *     ResourceCollection?: ResourceCollection|null,
     *     Type?: 'CAUSAL'|'CONTEXTUAL'|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     CausalAnomalyId?: string|null,
     *     AnomalyResources?: list<AnomalyResource>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
