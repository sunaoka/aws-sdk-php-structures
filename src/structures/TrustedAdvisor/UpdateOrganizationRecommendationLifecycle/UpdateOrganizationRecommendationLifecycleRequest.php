<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\UpdateOrganizationRecommendationLifecycle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'pending_response'|'in_progress'|'dismissed'|'resolved' $lifecycleStage
 * @property string|null $updateReason
 * @property 'non_critical_account'|'temporary_account'|'valid_business_case'|'other_methods_available'|'low_priority'|'not_applicable'|'other'|null $updateReasonCode
 * @property string $organizationRecommendationIdentifier
 */
class UpdateOrganizationRecommendationLifecycleRequest extends Request
{
    /**
     * @param array{
     *     lifecycleStage: 'pending_response'|'in_progress'|'dismissed'|'resolved',
     *     updateReason?: string|null,
     *     updateReasonCode?: 'non_critical_account'|'temporary_account'|'valid_business_case'|'other_methods_available'|'low_priority'|'not_applicable'|'other'|null,
     *     organizationRecommendationIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
