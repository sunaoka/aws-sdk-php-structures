<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateCalculatedAttributeDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2147483647>|null $Value
 * @property 'DAYS'|null $Unit
 * @property ValueRange|null $ValueRange
 * @property string|null $TimestampSource
 * @property string|null $TimestampFormat
 */
class Range extends Shape
{
    /**
     * @param array{
     *     Value?: int<0, 2147483647>|null,
     *     Unit?: 'DAYS'|null,
     *     ValueRange?: ValueRange|null,
     *     TimestampSource?: string|null,
     *     TimestampFormat?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
