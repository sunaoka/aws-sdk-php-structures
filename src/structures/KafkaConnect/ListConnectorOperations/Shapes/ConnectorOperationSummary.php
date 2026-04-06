<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListConnectorOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $connectorOperationArn
 * @property 'UPDATE_WORKER_SETTING'|'UPDATE_CONNECTOR_CONFIGURATION'|'ISOLATE_CONNECTOR'|'RESTORE_CONNECTOR'|null $connectorOperationType
 * @property 'PENDING'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_FAILED'|'ROLLBACK_COMPLETE'|null $connectorOperationState
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 */
class ConnectorOperationSummary extends Shape
{
    /**
     * @param array{
     *     connectorOperationArn?: string|null,
     *     connectorOperationType?: 'UPDATE_WORKER_SETTING'|'UPDATE_CONNECTOR_CONFIGURATION'|'ISOLATE_CONNECTOR'|'RESTORE_CONNECTOR'|null,
     *     connectorOperationState?: 'PENDING'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_FAILED'|'ROLLBACK_COMPLETE'|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
