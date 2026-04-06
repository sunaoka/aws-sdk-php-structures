<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetDataIntegrationFlowExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datasetIdentifier
 */
class DataIntegrationFlowDatasetSource extends Shape
{
    /**
     * @param array{datasetIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
