<?php

namespace Sunaoka\Aws\Structures\Connect\SearchPredefinedAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property PredefinedAttributeValues|null $Values
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 */
class PredefinedAttribute extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Values?: PredefinedAttributeValues|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
