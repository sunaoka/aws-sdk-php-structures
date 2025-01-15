<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListIncidentRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $after
 * @property \Aws\Api\DateTimeResult|null $before
 * @property AttributeValueList|null $equals
 */
class Condition extends Shape
{
    /**
     * @param array{
     *     after?: \Aws\Api\DateTimeResult|null,
     *     before?: \Aws\Api\DateTimeResult|null,
     *     equals?: AttributeValueList|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
