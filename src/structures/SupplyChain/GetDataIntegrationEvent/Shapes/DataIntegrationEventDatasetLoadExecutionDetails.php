<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetDataIntegrationEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCEEDED'|'IN_PROGRESS'|'FAILED' $status
 * @property string|null $message
 */
class DataIntegrationEventDatasetLoadExecutionDetails extends Shape
{
    /**
     * @param array{
     *     status: 'SUCCEEDED'|'IN_PROGRESS'|'FAILED',
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
