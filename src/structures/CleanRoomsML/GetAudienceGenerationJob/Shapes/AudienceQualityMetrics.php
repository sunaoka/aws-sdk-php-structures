<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetAudienceGenerationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RelevanceMetric> $relevanceMetrics
 * @property double|null $recallMetric
 */
class AudienceQualityMetrics extends Shape
{
    /**
     * @param array{
     *     relevanceMetrics: list<RelevanceMetric>,
     *     recallMetric?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
