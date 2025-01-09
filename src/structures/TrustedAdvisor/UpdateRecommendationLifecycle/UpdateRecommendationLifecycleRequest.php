<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\UpdateRecommendationLifecycle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'pending_response'|'in_progress'|'dismissed'|'resolved' $lifecycleStage
 * @property string $recommendationIdentifier
 * @property string $updateReason
 * @property 'non_critical_account'|'temporary_account'|'valid_business_case'|'other_methods_available'|'low_priority'|'not_applicable'|'other' $updateReasonCode
 */
class UpdateRecommendationLifecycleRequest extends Request
{
    /**
     * @param array{
     *     lifecycleStage: 'pending_response'|'in_progress'|'dismissed'|'resolved',
     *     recommendationIdentifier: string,
     *     updateReason?: string,
     *     updateReasonCode?: 'non_critical_account'|'temporary_account'|'valid_business_case'|'other_methods_available'|'low_priority'|'not_applicable'|'other'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
