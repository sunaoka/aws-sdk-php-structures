<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property ReferenceDetails|null $ReferenceDetails
 */
class MetricReference extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     ReferenceDetails?: ReferenceDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
