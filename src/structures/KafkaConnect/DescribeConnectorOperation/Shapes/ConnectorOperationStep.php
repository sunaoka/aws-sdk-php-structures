<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnectorOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INITIALIZE_UPDATE'|'FINALIZE_UPDATE'|'UPDATE_WORKER_SETTING'|'UPDATE_CONNECTOR_CONFIGURATION'|'VALIDATE_UPDATE'|null $stepType
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELLED'|null $stepState
 */
class ConnectorOperationStep extends Shape
{
    /**
     * @param array{
     *     stepType?: 'INITIALIZE_UPDATE'|'FINALIZE_UPDATE'|'UPDATE_WORKER_SETTING'|'UPDATE_CONNECTOR_CONFIGURATION'|'VALIDATE_UPDATE'|null,
     *     stepState?: 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
