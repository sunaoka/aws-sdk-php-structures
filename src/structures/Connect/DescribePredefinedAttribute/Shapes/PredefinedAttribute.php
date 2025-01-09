<?php

namespace Sunaoka\Aws\Structures\Connect\DescribePredefinedAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property PredefinedAttributeValues $Values
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LastModifiedRegion
 */
class PredefinedAttribute extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Values?: PredefinedAttributeValues,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
