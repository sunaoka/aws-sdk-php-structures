<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\StartInstanceOnboardingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectInstanceId
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $status
 * @property 'EVENT_BRIDGE_ACCESS_DENIED'|'EVENT_BRIDGE_MANAGED_RULE_LIMIT_EXCEEDED'|'IAM_ACCESS_DENIED'|'KMS_ACCESS_DENIED'|'KMS_KEY_NOT_FOUND'|'INTERNAL_FAILURE' $failureCode
 */
class InstanceOnboardingJobStatus extends Shape
{
    /**
     * @param array{
     *     connectInstanceId: string,
     *     status: 'IN_PROGRESS'|'SUCCEEDED'|'FAILED',
     *     failureCode?: 'EVENT_BRIDGE_ACCESS_DENIED'|'EVENT_BRIDGE_MANAGED_RULE_LIMIT_EXCEEDED'|'IAM_ACCESS_DENIED'|'KMS_ACCESS_DENIED'|'KMS_KEY_NOT_FOUND'|'INTERNAL_FAILURE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
