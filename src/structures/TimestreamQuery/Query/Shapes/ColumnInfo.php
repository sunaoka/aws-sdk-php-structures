<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property Type $Type
 */
class ColumnInfo extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Type: Type
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
