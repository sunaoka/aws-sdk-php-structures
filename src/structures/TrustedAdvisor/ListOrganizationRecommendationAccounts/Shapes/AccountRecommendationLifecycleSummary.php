<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListOrganizationRecommendationAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $accountRecommendationArn
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property 'in_progress'|'pending_response'|'dismissed'|'resolved'|null $lifecycleStage
 * @property string|null $updateReason
 * @property 'non_critical_account'|'temporary_account'|'valid_business_case'|'other_methods_available'|'low_priority'|'not_applicable'|'other'|null $updateReasonCode
 * @property string|null $updatedOnBehalfOf
 * @property string|null $updatedOnBehalfOfJobTitle
 */
class AccountRecommendationLifecycleSummary extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     accountRecommendationArn?: string|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     lifecycleStage?: 'in_progress'|'pending_response'|'dismissed'|'resolved'|null,
     *     updateReason?: string|null,
     *     updateReasonCode?: 'non_critical_account'|'temporary_account'|'valid_business_case'|'other_methods_available'|'low_priority'|'not_applicable'|'other'|null,
     *     updatedOnBehalfOf?: string|null,
     *     updatedOnBehalfOfJobTitle?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
