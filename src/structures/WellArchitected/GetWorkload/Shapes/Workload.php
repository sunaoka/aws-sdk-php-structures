<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetWorkload\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkloadId
 * @property string $WorkloadArn
 * @property string $WorkloadName
 * @property string $Description
 * @property 'PRODUCTION'|'PREPRODUCTION' $Environment
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property list<string> $AccountIds
 * @property list<string> $AwsRegions
 * @property list<string> $NonAwsRegions
 * @property string $ArchitecturalDesign
 * @property string $ReviewOwner
 * @property \Aws\Api\DateTimeResult $ReviewRestrictionDate
 * @property bool $IsReviewOwnerUpdateAcknowledged
 * @property string $IndustryType
 * @property string $Industry
 * @property string $Notes
 * @property 'NOT_APPLICABLE'|'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'RISK_ACKNOWLEDGED' $ImprovementStatus
 * @property array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int> $RiskCounts
 * @property list<string> $PillarPriorities
 * @property list<string> $Lenses
 * @property string $Owner
 * @property string $ShareInvitationId
 * @property array<string, string> $Tags
 * @property WorkloadDiscoveryConfig $DiscoveryConfig
 * @property list<string> $Applications
 * @property list<WorkloadProfile> $Profiles
 * @property array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int> $PrioritizedRiskCounts
 * @property WorkloadJiraConfigurationOutput $JiraConfiguration
 */
class Workload extends Shape
{
    /**
     * @param array{
     *     WorkloadId?: string,
     *     WorkloadArn?: string,
     *     WorkloadName?: string,
     *     Description?: string,
     *     Environment?: 'PRODUCTION'|'PREPRODUCTION',
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     AccountIds?: list<string>,
     *     AwsRegions?: list<string>,
     *     NonAwsRegions?: list<string>,
     *     ArchitecturalDesign?: string,
     *     ReviewOwner?: string,
     *     ReviewRestrictionDate?: \Aws\Api\DateTimeResult,
     *     IsReviewOwnerUpdateAcknowledged?: bool,
     *     IndustryType?: string,
     *     Industry?: string,
     *     Notes?: string,
     *     ImprovementStatus?: 'NOT_APPLICABLE'|'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'RISK_ACKNOWLEDGED',
     *     RiskCounts?: array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int>,
     *     PillarPriorities?: list<string>,
     *     Lenses?: list<string>,
     *     Owner?: string,
     *     ShareInvitationId?: string,
     *     Tags?: array<string, string>,
     *     DiscoveryConfig?: WorkloadDiscoveryConfig,
     *     Applications?: list<string>,
     *     Profiles?: list<WorkloadProfile>,
     *     PrioritizedRiskCounts?: array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int>,
     *     JiraConfiguration?: WorkloadJiraConfigurationOutput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
