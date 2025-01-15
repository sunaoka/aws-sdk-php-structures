<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DatabaseId
 * @property string|null $EngineName
 * @property string|null $CreatedDate
 * @property string|null $Status
 * @property bool|null $Preferred
 * @property RecommendationSettings|null $Settings
 * @property RecommendationData|null $Data
 */
class Recommendation extends Shape
{
    /**
     * @param array{
     *     DatabaseId?: string|null,
     *     EngineName?: string|null,
     *     CreatedDate?: string|null,
     *     Status?: string|null,
     *     Preferred?: bool|null,
     *     Settings?: RecommendationSettings|null,
     *     Data?: RecommendationData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
