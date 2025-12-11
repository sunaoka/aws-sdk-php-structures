<?php

namespace Sunaoka\Aws\Structures\Connect\BatchDescribeDataTableValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PrimaryValue> $PrimaryValues
 * @property string $AttributeName
 * @property string $Message
 */
class BatchDescribeDataTableValueFailureResult extends Shape
{
    /**
     * @param array{
     *     PrimaryValues: list<PrimaryValue>,
     *     AttributeName: string,
     *     Message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
