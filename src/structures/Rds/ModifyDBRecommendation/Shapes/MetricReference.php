<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property ReferenceDetails $ReferenceDetails
 */
class MetricReference extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     ReferenceDetails?: ReferenceDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
