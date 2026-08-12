<?php

namespace Sunaoka\Aws\Structures\WellArchitected\PutAgentRecommendationFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recommendationArn
 * @property 'USEFUL'|'NOT_USEFUL' $type
 * @property 'OTHER'|'RECOMMENDATION_NOT_RELEVANT'|'RESOURCE_NOT_IMPORTANT'|'RESOURCE_TYPE_NOT_IMPORTANT'|'RECOMMENDATION_INCORRECT'|null $feedbackCategory
 * @property string|null $comments
 */
class PutAgentRecommendationFeedbackRequest extends Request
{
    /**
     * @param array{
     *     recommendationArn: string,
     *     type: 'USEFUL'|'NOT_USEFUL',
     *     feedbackCategory?: 'OTHER'|'RECOMMENDATION_NOT_RELEVANT'|'RESOURCE_NOT_IMPORTANT'|'RESOURCE_TYPE_NOT_IMPORTANT'|'RECOMMENDATION_INCORRECT'|null,
     *     comments?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
