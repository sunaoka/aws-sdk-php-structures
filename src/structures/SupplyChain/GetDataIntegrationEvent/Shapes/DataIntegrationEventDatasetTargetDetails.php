<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetDataIntegrationEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datasetIdentifier
 * @property 'APPEND'|'UPSERT'|'DELETE' $operationType
 * @property DataIntegrationEventDatasetLoadExecutionDetails $datasetLoadExecution
 */
class DataIntegrationEventDatasetTargetDetails extends Shape
{
    /**
     * @param array{
     *     datasetIdentifier: string,
     *     operationType: 'APPEND'|'UPSERT'|'DELETE',
     *     datasetLoadExecution: DataIntegrationEventDatasetLoadExecutionDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
