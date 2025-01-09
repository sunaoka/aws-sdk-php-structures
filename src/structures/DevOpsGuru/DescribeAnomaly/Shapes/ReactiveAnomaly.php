<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeAnomaly\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'LOW'|'MEDIUM'|'HIGH' $Severity
 * @property 'ONGOING'|'CLOSED' $Status
 * @property AnomalyTimeRange $AnomalyTimeRange
 * @property AnomalyReportedTimeRange $AnomalyReportedTimeRange
 * @property AnomalySourceDetails $SourceDetails
 * @property string $AssociatedInsightId
 * @property ResourceCollection $ResourceCollection
 * @property 'CAUSAL'|'CONTEXTUAL' $Type
 * @property string $Name
 * @property string $Description
 * @property string $CausalAnomalyId
 * @property list<AnomalyResource> $AnomalyResources
 */
class ReactiveAnomaly extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Severity?: 'LOW'|'MEDIUM'|'HIGH',
     *     Status?: 'ONGOING'|'CLOSED',
     *     AnomalyTimeRange?: AnomalyTimeRange,
     *     AnomalyReportedTimeRange?: AnomalyReportedTimeRange,
     *     SourceDetails?: AnomalySourceDetails,
     *     AssociatedInsightId?: string,
     *     ResourceCollection?: ResourceCollection,
     *     Type?: 'CAUSAL'|'CONTEXTUAL',
     *     Name?: string,
     *     Description?: string,
     *     CausalAnomalyId?: string,
     *     AnomalyResources?: list<AnomalyResource>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
