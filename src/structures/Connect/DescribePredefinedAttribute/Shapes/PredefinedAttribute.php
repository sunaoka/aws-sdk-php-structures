<?php

namespace Sunaoka\Aws\Structures\Connect\DescribePredefinedAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property PredefinedAttributeValues|null $Values
 * @property list<string>|null $Purposes
 * @property PredefinedAttributeConfiguration|null $AttributeConfiguration
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 */
class PredefinedAttribute extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Values?: PredefinedAttributeValues|null,
     *     Purposes?: list<string>|null,
     *     AttributeConfiguration?: PredefinedAttributeConfiguration|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
