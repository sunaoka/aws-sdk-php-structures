<?php

namespace Sunaoka\Aws\Structures\QConnect\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property JSONDocument $value
 */
class FilterAttribute extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     value: JSONDocument
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
