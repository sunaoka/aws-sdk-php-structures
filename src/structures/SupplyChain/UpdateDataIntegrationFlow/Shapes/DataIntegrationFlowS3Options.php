<?php

namespace Sunaoka\Aws\Structures\SupplyChain\UpdateDataIntegrationFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CSV'|'PARQUET'|'JSON'|null $fileType
 */
class DataIntegrationFlowS3Options extends Shape
{
    /**
     * @param array{fileType?: 'CSV'|'PARQUET'|'JSON'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
