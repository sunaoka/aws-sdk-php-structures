<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property S3Location|null $TempDirectory
 */
class DataCatalogInputDefinition extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     TableName: string,
     *     TempDirectory?: S3Location|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
