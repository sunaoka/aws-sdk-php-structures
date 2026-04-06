<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetWorkload\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WorkloadId
 * @property string|null $WorkloadArn
 * @property string|null $WorkloadName
 * @property string|null $Description
 * @property 'PRODUCTION'|'PREPRODUCTION'|null $Environment
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property list<string>|null $AccountIds
 * @property list<string>|null $AwsRegions
 * @property list<string>|null $NonAwsRegions
 * @property string|null $ArchitecturalDesign
 * @property string|null $ReviewOwner
 * @property \Aws\Api\DateTimeResult|null $ReviewRestrictionDate
 * @property bool|null $IsReviewOwnerUpdateAcknowledged
 * @property string|null $IndustryType
 * @property string|null $Industry
 * @property string|null $Notes
 * @property 'NOT_APPLICABLE'|'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'RISK_ACKNOWLEDGED'|null $ImprovementStatus
 * @property array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>|null $RiskCounts
 * @property list<string>|null $PillarPriorities
 * @property list<string>|null $Lenses
 * @property string|null $Owner
 * @property string|null $ShareInvitationId
 * @property array<string, string>|null $Tags
 * @property WorkloadDiscoveryConfig|null $DiscoveryConfig
 * @property list<string>|null $Applications
 * @property list<WorkloadProfile>|null $Profiles
 * @property array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>|null $PrioritizedRiskCounts
 * @property WorkloadJiraConfigurationOutput|null $JiraConfiguration
 */
class Workload extends Shape
{
    /**
     * @param array{
     *     WorkloadId?: string|null,
     *     WorkloadArn?: string|null,
     *     WorkloadName?: string|null,
     *     Description?: string|null,
     *     Environment?: 'PRODUCTION'|'PREPRODUCTION'|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     AccountIds?: list<string>|null,
     *     AwsRegions?: list<string>|null,
     *     NonAwsRegions?: list<string>|null,
     *     ArchitecturalDesign?: string|null,
     *     ReviewOwner?: string|null,
     *     ReviewRestrictionDate?: \Aws\Api\DateTimeResult|null,
     *     IsReviewOwnerUpdateAcknowledged?: bool|null,
     *     IndustryType?: string|null,
     *     Industry?: string|null,
     *     Notes?: string|null,
     *     ImprovementStatus?: 'NOT_APPLICABLE'|'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'RISK_ACKNOWLEDGED'|null,
     *     RiskCounts?: array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>|null,
     *     PillarPriorities?: list<string>|null,
     *     Lenses?: list<string>|null,
     *     Owner?: string|null,
     *     ShareInvitationId?: string|null,
     *     Tags?: array<string, string>|null,
     *     DiscoveryConfig?: WorkloadDiscoveryConfig|null,
     *     Applications?: list<string>|null,
     *     Profiles?: list<WorkloadProfile>|null,
     *     PrioritizedRiskCounts?: array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>|null,
     *     JiraConfiguration?: WorkloadJiraConfigurationOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
