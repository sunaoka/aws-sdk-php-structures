<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListIncidentRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $after
 * @property \Aws\Api\DateTimeResult $before
 * @property AttributeValueList $equals
 */
class Condition extends Shape
{
    /**
     * @param array{
     *     after?: \Aws\Api\DateTimeResult,
     *     before?: \Aws\Api\DateTimeResult,
     *     equals?: AttributeValueList
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
