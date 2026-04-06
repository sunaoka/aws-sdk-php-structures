<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\RejectResourceGroupingRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $errorMessage
 * @property string $groupingRecommendationId
 */
class FailedGroupingRecommendationEntry extends Shape
{
    /**
     * @param array{
     *     errorMessage: string,
     *     groupingRecommendationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
