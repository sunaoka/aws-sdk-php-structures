<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEffectiveRecommendationPreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 */
class GetEffectiveRecommendationPreferencesRequest extends Request
{
    /**
     * @param array{resourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
