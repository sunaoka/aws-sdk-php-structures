<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'None'|'SingleFile'|null $aggregationType
 * @property int|null $targetFileSize
 */
class AggregationConfig extends Shape
{
    /**
     * @param array{
     *     aggregationType?: 'None'|'SingleFile'|null,
     *     targetFileSize?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
