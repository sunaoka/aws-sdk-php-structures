<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Location|null $S3InputDefinition
 * @property DataCatalogInputDefinition|null $DataCatalogInputDefinition
 * @property DatabaseInputDefinition|null $DatabaseInputDefinition
 * @property Metadata|null $Metadata
 */
class Input extends Shape
{
    /**
     * @param array{
     *     S3InputDefinition?: S3Location|null,
     *     DataCatalogInputDefinition?: DataCatalogInputDefinition|null,
     *     DatabaseInputDefinition?: DatabaseInputDefinition|null,
     *     Metadata?: Metadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
