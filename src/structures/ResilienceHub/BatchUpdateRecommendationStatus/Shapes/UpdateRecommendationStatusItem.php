<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\BatchUpdateRecommendationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resourceId
 * @property string|null $targetAccountId
 * @property string|null $targetRegion
 */
class UpdateRecommendationStatusItem extends Shape
{
    /**
     * @param array{
     *     resourceId?: string|null,
     *     targetAccountId?: string|null,
     *     targetRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
