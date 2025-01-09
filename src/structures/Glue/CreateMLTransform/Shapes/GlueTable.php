<?php

namespace Sunaoka\Aws\Structures\Glue\CreateMLTransform\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseName
 * @property string $TableName
 * @property string $CatalogId
 * @property string $ConnectionName
 * @property array<string, string> $AdditionalOptions
 */
class GlueTable extends Shape
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     TableName: string,
     *     CatalogId?: string,
     *     ConnectionName?: string,
     *     AdditionalOptions?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
