<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListOrganizationRecommendationAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $accountRecommendationArn
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property 'in_progress'|'pending_response'|'dismissed'|'resolved' $lifecycleStage
 * @property string $updateReason
 * @property 'non_critical_account'|'temporary_account'|'valid_business_case'|'other_methods_available'|'low_priority'|'not_applicable'|'other' $updateReasonCode
 * @property string $updatedOnBehalfOf
 * @property string $updatedOnBehalfOfJobTitle
 */
class AccountRecommendationLifecycleSummary extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     accountRecommendationArn?: string,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     lifecycleStage?: 'in_progress'|'pending_response'|'dismissed'|'resolved',
     *     updateReason?: string,
     *     updateReasonCode?: 'non_critical_account'|'temporary_account'|'valid_business_case'|'other_methods_available'|'low_priority'|'not_applicable'|'other',
     *     updatedOnBehalfOf?: string,
     *     updatedOnBehalfOfJobTitle?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
