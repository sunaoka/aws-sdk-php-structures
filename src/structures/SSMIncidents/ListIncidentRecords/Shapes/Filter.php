<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListIncidentRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Condition $condition
 * @property string $key
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     condition: Condition,
     *     key: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
