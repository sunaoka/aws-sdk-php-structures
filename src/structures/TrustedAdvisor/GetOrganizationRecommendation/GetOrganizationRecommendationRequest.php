<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\GetOrganizationRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $organizationRecommendationIdentifier
 */
class GetOrganizationRecommendationRequest extends Request
{
    /**
     * @param array{organizationRecommendationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
