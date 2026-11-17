<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentRecommendationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recommendationArn
 */
class GetAgentRecommendationPolicyRequest extends Request
{
    /**
     * @param array{recommendationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
