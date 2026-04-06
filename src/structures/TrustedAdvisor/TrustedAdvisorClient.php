<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor;

class TrustedAdvisorClient extends \Aws\TrustedAdvisor\TrustedAdvisorClient
{
    use BatchUpdateRecommendationResourceExclusion\BatchUpdateRecommendationResourceExclusionTrait;
    use GetOrganizationRecommendation\GetOrganizationRecommendationTrait;
    use GetRecommendation\GetRecommendationTrait;
    use ListChecks\ListChecksTrait;
    use ListOrganizationRecommendationAccounts\ListOrganizationRecommendationAccountsTrait;
    use ListOrganizationRecommendationResources\ListOrganizationRecommendationResourcesTrait;
    use ListOrganizationRecommendations\ListOrganizationRecommendationsTrait;
    use ListRecommendationResources\ListRecommendationResourcesTrait;
    use ListRecommendations\ListRecommendationsTrait;
    use UpdateOrganizationRecommendationLifecycle\UpdateOrganizationRecommendationLifecycleTrait;
    use UpdateRecommendationLifecycle\UpdateRecommendationLifecycleTrait;
}
