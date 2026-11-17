<?php

namespace Sunaoka\Aws\Structures\WellArchitected\PutAgentRecommendationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recommendationArn
 * @property string $policy
 */
class PutAgentRecommendationPolicyRequest extends Request
{
    /**
     * @param array{
     *     recommendationArn: string,
     *     policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
