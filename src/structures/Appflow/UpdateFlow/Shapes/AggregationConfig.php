<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'None'|'SingleFile' $aggregationType
 * @property int $targetFileSize
 */
class AggregationConfig extends Shape
{
    /**
     * @param array{
     *     aggregationType?: 'None'|'SingleFile',
     *     targetFileSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
