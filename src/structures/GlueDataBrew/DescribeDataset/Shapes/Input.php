<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Location $S3InputDefinition
 * @property DataCatalogInputDefinition $DataCatalogInputDefinition
 * @property DatabaseInputDefinition $DatabaseInputDefinition
 * @property Metadata $Metadata
 */
class Input extends Shape
{
    /**
     * @param array{
     *     S3InputDefinition?: S3Location,
     *     DataCatalogInputDefinition?: DataCatalogInputDefinition,
     *     DatabaseInputDefinition?: DatabaseInputDefinition,
     *     Metadata?: Metadata
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
