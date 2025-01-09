<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Keys
 * @property string $IndexName
 */
class PartitionIndex extends Shape
{
    /**
     * @param array{
     *     Keys: list<string>,
     *     IndexName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
