<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseId
 * @property string $EngineName
 * @property string $CreatedDate
 * @property string $Status
 * @property bool $Preferred
 * @property RecommendationSettings $Settings
 * @property RecommendationData $Data
 */
class Recommendation extends Shape
{
    /**
     * @param array{
     *     DatabaseId?: string,
     *     EngineName?: string,
     *     CreatedDate?: string,
     *     Status?: string,
     *     Preferred?: bool,
     *     Settings?: RecommendationSettings,
     *     Data?: RecommendationData
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
