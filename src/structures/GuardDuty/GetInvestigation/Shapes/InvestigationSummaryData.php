<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetInvestigation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FindingType
 * @property ThreatAssessment|null $ThreatAssessment
 * @property list<Countermeasure>|null $Countermeasures
 * @property AccountAnalysis|null $AccountAnalysis
 * @property OrganizationAnalysis|null $OrganizationAnalysis
 * @property KeyObservations|null $KeyObservations
 * @property list<Recommendation>|null $Recommendations
 */
class InvestigationSummaryData extends Shape
{
    /**
     * @param array{
     *     FindingType?: string|null,
     *     ThreatAssessment?: ThreatAssessment|null,
     *     Countermeasures?: list<Countermeasure>|null,
     *     AccountAnalysis?: AccountAnalysis|null,
     *     OrganizationAnalysis?: OrganizationAnalysis|null,
     *     KeyObservations?: KeyObservations|null,
     *     Recommendations?: list<Recommendation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
