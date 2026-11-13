<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REPUTATION'|'THREAT_ASSESSMENT'|'RDS_THREAT_ASSESSMENT'|'KUBERNETES_POLICY_VIOLATION'|'S3_EXPOSURE'|'S3_ACTOR_CONTEXT'|'S3_PEN_TEST'|'PROCESS_LINEAGE'|'TREND'|'BASELINE' $AnalysisType
 * @property InvestigationThreatAssessment|null $ThreatAssessment
 * @property KubernetesPolicyViolation|null $KubernetesPolicyViolation
 * @property S3Analysis|null $S3Analysis
 * @property list<Process>|null $Processes
 * @property InvestigationAccountAnalysis|null $AccountAnalysis
 * @property list<InvestigationIndicator>|null $Indicators
 */
class AnalysisRecord extends Shape
{
    /**
     * @param array{
     *     AnalysisType: 'REPUTATION'|'THREAT_ASSESSMENT'|'RDS_THREAT_ASSESSMENT'|'KUBERNETES_POLICY_VIOLATION'|'S3_EXPOSURE'|'S3_ACTOR_CONTEXT'|'S3_PEN_TEST'|'PROCESS_LINEAGE'|'TREND'|'BASELINE',
     *     ThreatAssessment?: InvestigationThreatAssessment|null,
     *     KubernetesPolicyViolation?: KubernetesPolicyViolation|null,
     *     S3Analysis?: S3Analysis|null,
     *     Processes?: list<Process>|null,
     *     AccountAnalysis?: InvestigationAccountAnalysis|null,
     *     Indicators?: list<InvestigationIndicator>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
