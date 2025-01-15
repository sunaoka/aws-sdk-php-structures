<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property CurrentInstance|null $CurrentInstance
 * @property 'TERMINATE'|'MODIFY'|null $RightsizingType
 * @property ModifyRecommendationDetail|null $ModifyRecommendationDetail
 * @property TerminateRecommendationDetail|null $TerminateRecommendationDetail
 * @property list<'CPU_OVER_PROVISIONED'|'CPU_UNDER_PROVISIONED'|'MEMORY_OVER_PROVISIONED'|'MEMORY_UNDER_PROVISIONED'|'EBS_THROUGHPUT_OVER_PROVISIONED'|'EBS_THROUGHPUT_UNDER_PROVISIONED'|'EBS_IOPS_OVER_PROVISIONED'|'EBS_IOPS_UNDER_PROVISIONED'|'NETWORK_BANDWIDTH_OVER_PROVISIONED'|'NETWORK_BANDWIDTH_UNDER_PROVISIONED'|'NETWORK_PPS_OVER_PROVISIONED'|'NETWORK_PPS_UNDER_PROVISIONED'|'DISK_IOPS_OVER_PROVISIONED'|'DISK_IOPS_UNDER_PROVISIONED'|'DISK_THROUGHPUT_OVER_PROVISIONED'|'DISK_THROUGHPUT_UNDER_PROVISIONED'>|null $FindingReasonCodes
 */
class RightsizingRecommendation extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     CurrentInstance?: CurrentInstance|null,
     *     RightsizingType?: 'TERMINATE'|'MODIFY'|null,
     *     ModifyRecommendationDetail?: ModifyRecommendationDetail|null,
     *     TerminateRecommendationDetail?: TerminateRecommendationDetail|null,
     *     FindingReasonCodes?: list<'CPU_OVER_PROVISIONED'|'CPU_UNDER_PROVISIONED'|'MEMORY_OVER_PROVISIONED'|'MEMORY_UNDER_PROVISIONED'|'EBS_THROUGHPUT_OVER_PROVISIONED'|'EBS_THROUGHPUT_UNDER_PROVISIONED'|'EBS_IOPS_OVER_PROVISIONED'|'EBS_IOPS_UNDER_PROVISIONED'|'NETWORK_BANDWIDTH_OVER_PROVISIONED'|'NETWORK_BANDWIDTH_UNDER_PROVISIONED'|'NETWORK_PPS_OVER_PROVISIONED'|'NETWORK_PPS_UNDER_PROVISIONED'|'DISK_IOPS_OVER_PROVISIONED'|'DISK_IOPS_UNDER_PROVISIONED'|'DISK_THROUGHPUT_OVER_PROVISIONED'|'DISK_THROUGHPUT_UNDER_PROVISIONED'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
