<?php

namespace Sunaoka\Aws\Structures\SupplyChain\SendDataIntegrationEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datasetIdentifier
 * @property 'APPEND'|'UPSERT'|'DELETE' $operationType
 */
class DataIntegrationEventDatasetTargetConfiguration extends Shape
{
    /**
     * @param array{
     *     datasetIdentifier: string,
     *     operationType: 'APPEND'|'UPSERT'|'DELETE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
