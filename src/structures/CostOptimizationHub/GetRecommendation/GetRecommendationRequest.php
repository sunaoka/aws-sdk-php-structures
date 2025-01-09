<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recommendationId
 */
class GetRecommendationRequest extends Request
{
    /**
     * @param array{recommendationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
