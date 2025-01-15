<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RdsRecommendation|null $RdsEngine
 */
class RecommendationData extends Shape
{
    /**
     * @param array{RdsEngine?: RdsRecommendation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
