<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\GetOrganizationRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $errorCount
 * @property int $okCount
 * @property int $warningCount
 */
class RecommendationResourcesAggregates extends Shape
{
    /**
     * @param array{
     *     errorCount: int,
     *     okCount: int,
     *     warningCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
