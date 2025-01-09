<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $deprecated
 * @property \Aws\Api\DateTimeResult $deprecationDate
 * @property \Aws\Api\DateTimeResult $creationDate
 */
class ThingTypeMetadata extends Shape
{
    /**
     * @param array{
     *     deprecated?: bool,
     *     deprecationDate?: \Aws\Api\DateTimeResult,
     *     creationDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
