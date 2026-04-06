<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateWorkload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string|null $WorkloadName
 * @property string|null $Description
 * @property 'PRODUCTION'|'PREPRODUCTION'|null $Environment
 * @property list<string>|null $AccountIds
 * @property list<string>|null $AwsRegions
 * @property list<string>|null $NonAwsRegions
 * @property list<string>|null $PillarPriorities
 * @property string|null $ArchitecturalDesign
 * @property string|null $ReviewOwner
 * @property bool|null $IsReviewOwnerUpdateAcknowledged
 * @property string|null $IndustryType
 * @property string|null $Industry
 * @property string|null $Notes
 * @property 'NOT_APPLICABLE'|'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'RISK_ACKNOWLEDGED'|null $ImprovementStatus
 * @property Shapes\WorkloadDiscoveryConfig|null $DiscoveryConfig
 * @property list<string>|null $Applications
 * @property Shapes\WorkloadJiraConfigurationInput|null $JiraConfiguration
 */
class UpdateWorkloadRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     WorkloadName?: string|null,
     *     Description?: string|null,
     *     Environment?: 'PRODUCTION'|'PREPRODUCTION'|null,
     *     AccountIds?: list<string>|null,
     *     AwsRegions?: list<string>|null,
     *     NonAwsRegions?: list<string>|null,
     *     PillarPriorities?: list<string>|null,
     *     ArchitecturalDesign?: string|null,
     *     ReviewOwner?: string|null,
     *     IsReviewOwnerUpdateAcknowledged?: bool|null,
     *     IndustryType?: string|null,
     *     Industry?: string|null,
     *     Notes?: string|null,
     *     ImprovementStatus?: 'NOT_APPLICABLE'|'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'RISK_ACKNOWLEDGED'|null,
     *     DiscoveryConfig?: Shapes\WorkloadDiscoveryConfig|null,
     *     Applications?: list<string>|null,
     *     JiraConfiguration?: Shapes\WorkloadJiraConfigurationInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
