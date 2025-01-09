<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetDataIntegrationFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datasetIdentifier
 * @property DataIntegrationFlowDatasetOptions $options
 */
class DataIntegrationFlowDatasetSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     datasetIdentifier: string,
     *     options?: DataIntegrationFlowDatasetOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
