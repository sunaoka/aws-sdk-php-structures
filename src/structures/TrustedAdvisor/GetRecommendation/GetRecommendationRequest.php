<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\GetRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recommendationIdentifier
 */
class GetRecommendationRequest extends Request
{
    /**
     * @param array{recommendationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
