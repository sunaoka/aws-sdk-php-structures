<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListOrganizationRecommendationAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $accountRecommendationArn
 * @property 'in_progress'|'pending_response'|'dismissed'|'resolved'|null $lifecycleStage
 * @property string|null $updatedOnBehalfOf
 * @property string|null $updatedOnBehalfOfJobTitle
 * @property string|null $updateReason
 * @property 'non_critical_account'|'temporary_account'|'valid_business_case'|'other_methods_available'|'low_priority'|'not_applicable'|'other'|null $updateReasonCode
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class AccountRecommendationLifecycleSummary extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     accountRecommendationArn?: string|null,
     *     lifecycleStage?: 'in_progress'|'pending_response'|'dismissed'|'resolved'|null,
     *     updatedOnBehalfOf?: string|null,
     *     updatedOnBehalfOfJobTitle?: string|null,
     *     updateReason?: string|null,
     *     updateReasonCode?: 'non_critical_account'|'temporary_account'|'valid_business_case'|'other_methods_available'|'low_priority'|'not_applicable'|'other'|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
