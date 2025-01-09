<?php

namespace Sunaoka\Aws\Structures\SupplyChain\CreateDataIntegrationFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CSV'|'PARQUET'|'JSON' $fileType
 */
class DataIntegrationFlowS3Options extends Shape
{
    /**
     * @param array{fileType?: 'CSV'|'PARQUET'|'JSON'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
