<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property S3TableOutputOptions|null $S3Options
 * @property DatabaseTableOutputOptions|null $DatabaseOptions
 * @property bool|null $Overwrite
 */
class DataCatalogOutput extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     TableName: string,
     *     S3Options?: S3TableOutputOptions|null,
     *     DatabaseOptions?: DatabaseTableOutputOptions|null,
     *     Overwrite?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
