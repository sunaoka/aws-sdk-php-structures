<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\StartInstanceOnboardingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectInstanceId
 * @property 'EVENT_BRIDGE_ACCESS_DENIED'|'EVENT_BRIDGE_MANAGED_RULE_LIMIT_EXCEEDED'|'IAM_ACCESS_DENIED'|'KMS_ACCESS_DENIED'|'KMS_KEY_NOT_FOUND'|'INTERNAL_FAILURE'|null $failureCode
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $status
 */
class InstanceOnboardingJobStatus extends Shape
{
    /**
     * @param array{
     *     connectInstanceId: string,
     *     failureCode?: 'EVENT_BRIDGE_ACCESS_DENIED'|'EVENT_BRIDGE_MANAGED_RULE_LIMIT_EXCEEDED'|'IAM_ACCESS_DENIED'|'KMS_ACCESS_DENIED'|'KMS_KEY_NOT_FOUND'|'INTERNAL_FAILURE'|null,
     *     status: 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
