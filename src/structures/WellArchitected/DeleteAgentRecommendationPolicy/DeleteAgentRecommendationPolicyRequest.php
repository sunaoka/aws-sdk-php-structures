<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteAgentRecommendationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recommendationArn
 */
class DeleteAgentRecommendationPolicyRequest extends Request
{
    /**
     * @param array{recommendationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
