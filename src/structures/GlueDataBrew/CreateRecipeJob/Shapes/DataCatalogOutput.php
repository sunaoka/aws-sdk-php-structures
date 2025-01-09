<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateRecipeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property S3TableOutputOptions $S3Options
 * @property DatabaseTableOutputOptions $DatabaseOptions
 * @property bool $Overwrite
 */
class DataCatalogOutput extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     S3Options?: S3TableOutputOptions,
     *     DatabaseOptions?: DatabaseTableOutputOptions,
     *     Overwrite?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
