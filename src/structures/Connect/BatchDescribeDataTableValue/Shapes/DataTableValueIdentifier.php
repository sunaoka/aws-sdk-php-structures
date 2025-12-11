<?php

namespace Sunaoka\Aws\Structures\Connect\BatchDescribeDataTableValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PrimaryValue>|null $PrimaryValues
 * @property string $AttributeName
 */
class DataTableValueIdentifier extends Shape
{
    /**
     * @param array{
     *     PrimaryValues?: list<PrimaryValue>|null,
     *     AttributeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
