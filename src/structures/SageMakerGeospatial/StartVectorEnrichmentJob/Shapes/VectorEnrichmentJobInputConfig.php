<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartVectorEnrichmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VectorEnrichmentJobDataSourceConfigInput $DataSourceConfig
 * @property 'CSV' $DocumentType
 */
class VectorEnrichmentJobInputConfig extends Shape
{
    /**
     * @param array{
     *     DataSourceConfig: VectorEnrichmentJobDataSourceConfigInput,
     *     DocumentType: 'CSV'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
