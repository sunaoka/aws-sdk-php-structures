<?php

namespace Sunaoka\Aws\Structures\Connect\BatchDeleteDataTableValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PrimaryValue> $PrimaryValues
 * @property string $AttributeName
 * @property string $Message
 */
class BatchDeleteDataTableValueFailureResult extends Shape
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
