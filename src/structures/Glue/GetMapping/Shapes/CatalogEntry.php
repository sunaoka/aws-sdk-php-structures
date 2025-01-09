<?php

namespace Sunaoka\Aws\Structures\Glue\GetMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseName
 * @property string $TableName
 */
class CatalogEntry extends Shape
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     TableName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
