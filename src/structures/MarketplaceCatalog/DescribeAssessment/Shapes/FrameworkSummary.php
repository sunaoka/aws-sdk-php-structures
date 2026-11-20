<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AMISecuritySummary|null $AMISecuritySummary
 * @property ContainerSecuritySummary|null $ContainerSecuritySummary
 * @property ListingQualitySummary|null $ListingQualitySummary
 * @property ListingRecommendationsSummary|null $ListingRecommendationsSummary
 */
class FrameworkSummary extends Shape
{
    /**
     * @param array{
     *     AMISecuritySummary?: AMISecuritySummary|null,
     *     ContainerSecuritySummary?: ContainerSecuritySummary|null,
     *     ListingQualitySummary?: ListingQualitySummary|null,
     *     ListingRecommendationsSummary?: ListingRecommendationsSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
