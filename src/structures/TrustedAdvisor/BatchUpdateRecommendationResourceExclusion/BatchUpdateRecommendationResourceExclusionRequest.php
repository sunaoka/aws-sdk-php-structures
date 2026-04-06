<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\BatchUpdateRecommendationResourceExclusion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\RecommendationResourceExclusion> $recommendationResourceExclusions
 */
class BatchUpdateRecommendationResourceExclusionRequest extends Request
{
    /**
     * @param array{recommendationResourceExclusions: list<Shapes\RecommendationResourceExclusion>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
