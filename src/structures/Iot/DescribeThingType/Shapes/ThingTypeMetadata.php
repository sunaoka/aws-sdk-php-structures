<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeThingType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $deprecated
 * @property \Aws\Api\DateTimeResult|null $deprecationDate
 * @property \Aws\Api\DateTimeResult|null $creationDate
 */
class ThingTypeMetadata extends Shape
{
    /**
     * @param array{
     *     deprecated?: bool|null,
     *     deprecationDate?: \Aws\Api\DateTimeResult|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
