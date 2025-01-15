<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS'|'NOT_EQUALS'|'STARTS_WITH'|null $ComparisonOperator
 * @property string $Value
 */
class PlatformInput extends Shape
{
    /**
     * @param array{
     *     ComparisonOperator?: 'EQUALS'|'NOT_EQUALS'|'STARTS_WITH'|null,
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
