<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property CurrentInstance $CurrentInstance
 * @property 'TERMINATE'|'MODIFY' $RightsizingType
 * @property ModifyRecommendationDetail $ModifyRecommendationDetail
 * @property TerminateRecommendationDetail $TerminateRecommendationDetail
 * @property list<'CPU_OVER_PROVISIONED'|'CPU_UNDER_PROVISIONED'|'MEMORY_OVER_PROVISIONED'|'MEMORY_UNDER_PROVISIONED'|'EBS_THROUGHPUT_OVER_PROVISIONED'|'EBS_THROUGHPUT_UNDER_PROVISIONED'|'EBS_IOPS_OVER_PROVISIONED'|'EBS_IOPS_UNDER_PROVISIONED'|'NETWORK_BANDWIDTH_OVER_PROVISIONED'|'NETWORK_BANDWIDTH_UNDER_PROVISIONED'|'NETWORK_PPS_OVER_PROVISIONED'|'NETWORK_PPS_UNDER_PROVISIONED'|'DISK_IOPS_OVER_PROVISIONED'|'DISK_IOPS_UNDER_PROVISIONED'|'DISK_THROUGHPUT_OVER_PROVISIONED'|'DISK_THROUGHPUT_UNDER_PROVISIONED'> $FindingReasonCodes
 */
class RightsizingRecommendation extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     CurrentInstance?: CurrentInstance,
     *     RightsizingType?: 'TERMINATE'|'MODIFY',
     *     ModifyRecommendationDetail?: ModifyRecommendationDetail,
     *     TerminateRecommendationDetail?: TerminateRecommendationDetail,
     *     FindingReasonCodes?: list<'CPU_OVER_PROVISIONED'|'CPU_UNDER_PROVISIONED'|'MEMORY_OVER_PROVISIONED'|'MEMORY_UNDER_PROVISIONED'|'EBS_THROUGHPUT_OVER_PROVISIONED'|'EBS_THROUGHPUT_UNDER_PROVISIONED'|'EBS_IOPS_OVER_PROVISIONED'|'EBS_IOPS_UNDER_PROVISIONED'|'NETWORK_BANDWIDTH_OVER_PROVISIONED'|'NETWORK_BANDWIDTH_UNDER_PROVISIONED'|'NETWORK_PPS_OVER_PROVISIONED'|'NETWORK_PPS_UNDER_PROVISIONED'|'DISK_IOPS_OVER_PROVISIONED'|'DISK_IOPS_UNDER_PROVISIONED'|'DISK_THROUGHPUT_OVER_PROVISIONED'|'DISK_THROUGHPUT_UNDER_PROVISIONED'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
