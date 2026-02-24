<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\GetOrganizationRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $okCount
 * @property int $warningCount
 * @property int $errorCount
 * @property int|null $excludedCount
 */
class RecommendationResourcesAggregates extends Shape
{
    /**
     * @param array{
     *     okCount: int,
     *     warningCount: int,
     *     errorCount: int,
     *     excludedCount?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
