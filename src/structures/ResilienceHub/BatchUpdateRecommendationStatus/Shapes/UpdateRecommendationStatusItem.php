<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\BatchUpdateRecommendationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceId
 * @property string $targetAccountId
 * @property string $targetRegion
 */
class UpdateRecommendationStatusItem extends Shape
{
    /**
     * @param array{
     *     resourceId?: string,
     *     targetAccountId?: string,
     *     targetRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
