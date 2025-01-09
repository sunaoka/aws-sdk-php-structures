<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateWorkload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string $WorkloadName
 * @property string $Description
 * @property 'PRODUCTION'|'PREPRODUCTION' $Environment
 * @property list<string> $AccountIds
 * @property list<string> $AwsRegions
 * @property list<string> $NonAwsRegions
 * @property list<string> $PillarPriorities
 * @property string $ArchitecturalDesign
 * @property string $ReviewOwner
 * @property bool $IsReviewOwnerUpdateAcknowledged
 * @property string $IndustryType
 * @property string $Industry
 * @property string $Notes
 * @property 'NOT_APPLICABLE'|'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'RISK_ACKNOWLEDGED' $ImprovementStatus
 * @property Shapes\WorkloadDiscoveryConfig $DiscoveryConfig
 * @property list<string> $Applications
 * @property Shapes\WorkloadJiraConfigurationInput $JiraConfiguration
 */
class UpdateWorkloadRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     WorkloadName?: string,
     *     Description?: string,
     *     Environment?: 'PRODUCTION'|'PREPRODUCTION',
     *     AccountIds?: list<string>,
     *     AwsRegions?: list<string>,
     *     NonAwsRegions?: list<string>,
     *     PillarPriorities?: list<string>,
     *     ArchitecturalDesign?: string,
     *     ReviewOwner?: string,
     *     IsReviewOwnerUpdateAcknowledged?: bool,
     *     IndustryType?: string,
     *     Industry?: string,
     *     Notes?: string,
     *     ImprovementStatus?: 'NOT_APPLICABLE'|'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'RISK_ACKNOWLEDGED',
     *     DiscoveryConfig?: Shapes\WorkloadDiscoveryConfig,
     *     Applications?: list<string>,
     *     JiraConfiguration?: Shapes\WorkloadJiraConfigurationInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
