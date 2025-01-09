<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TableName
 * @property string $Catalog
 * @property string $Database
 */
class DataCatalogConfig extends Shape
{
    /**
     * @param array{
     *     TableName: string,
     *     Catalog: string,
     *     Database: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
