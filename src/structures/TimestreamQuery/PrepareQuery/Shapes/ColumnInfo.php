<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\PrepareQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property Type $Type
 */
class ColumnInfo extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Type: Type
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
