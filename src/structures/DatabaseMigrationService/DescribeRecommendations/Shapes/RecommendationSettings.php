<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceSizingType
 * @property string $WorkloadType
 */
class RecommendationSettings extends Shape
{
    /**
     * @param array{
     *     InstanceSizingType: string,
     *     WorkloadType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
