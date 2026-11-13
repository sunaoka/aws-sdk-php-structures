<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FINDING_DETAIL'|'RESOURCE'|'NETWORK_ACTIVITY'|'RDS_LOGIN_ACTIVITY'|'S3_ACTIVITY'|'KUBERNETES_ACTIVITY'|'MALWARE_SCAN'|'RELATED_FINDINGS'|'DETECTION_COVERAGE'|'ACCOUNT_OVERVIEW'|'RECOMMENDATION'|'RUNTIME_SIGNALS'|'DISTRIBUTION'|'REPRESENTATIVE_RESOURCE' $ObservationType
 * @property FindingDetail|null $FindingDetail
 * @property InvestigationResource|null $Resource
 * @property NetworkActivity|null $NetworkActivity
 * @property RdsLoginActivity|null $RdsLoginActivity
 * @property S3Activity|null $S3Activity
 * @property KubernetesActivity|null $KubernetesActivity
 * @property InvestigationMalwareScan|null $MalwareScan
 * @property RelatedFindings|null $RelatedFindings
 * @property DetectionCoverage|null $DetectionCoverage
 * @property AccountOverview|null $AccountOverview
 * @property list<Recommendation>|null $Recommendations
 * @property RuntimeSignals|null $RuntimeSignals
 * @property Distribution|null $Distribution
 * @property list<RepresentativeFinding>|null $RepresentativeResources
 * @property list<InvestigationIndicator>|null $Indicators
 */
class ObservationRecord extends Shape
{
    /**
     * @param array{
     *     ObservationType: 'FINDING_DETAIL'|'RESOURCE'|'NETWORK_ACTIVITY'|'RDS_LOGIN_ACTIVITY'|'S3_ACTIVITY'|'KUBERNETES_ACTIVITY'|'MALWARE_SCAN'|'RELATED_FINDINGS'|'DETECTION_COVERAGE'|'ACCOUNT_OVERVIEW'|'RECOMMENDATION'|'RUNTIME_SIGNALS'|'DISTRIBUTION'|'REPRESENTATIVE_RESOURCE',
     *     FindingDetail?: FindingDetail|null,
     *     Resource?: InvestigationResource|null,
     *     NetworkActivity?: NetworkActivity|null,
     *     RdsLoginActivity?: RdsLoginActivity|null,
     *     S3Activity?: S3Activity|null,
     *     KubernetesActivity?: KubernetesActivity|null,
     *     MalwareScan?: InvestigationMalwareScan|null,
     *     RelatedFindings?: RelatedFindings|null,
     *     DetectionCoverage?: DetectionCoverage|null,
     *     AccountOverview?: AccountOverview|null,
     *     Recommendations?: list<Recommendation>|null,
     *     RuntimeSignals?: RuntimeSignals|null,
     *     Distribution?: Distribution|null,
     *     RepresentativeResources?: list<RepresentativeFinding>|null,
     *     Indicators?: list<InvestigationIndicator>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
