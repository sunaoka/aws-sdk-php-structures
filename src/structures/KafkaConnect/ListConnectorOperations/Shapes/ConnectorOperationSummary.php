<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListConnectorOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $connectorOperationArn
 * @property 'UPDATE_WORKER_SETTING'|'UPDATE_CONNECTOR_CONFIGURATION'|'ISOLATE_CONNECTOR'|'RESTORE_CONNECTOR'|'RESTART_CONNECTOR'|'PAUSE_CONNECTOR'|'RESUME_CONNECTOR'|null $connectorOperationType
 * @property 'PENDING'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_FAILED'|'ROLLBACK_COMPLETE'|'PAUSE_COMPLETE'|'PAUSE_FAILED'|'RESUME_COMPLETE'|'RESUME_FAILED'|'PAUSE_IN_PROGRESS'|'RESUME_IN_PROGRESS'|'RESTART_IN_PROGRESS'|'RESTART_COMPLETE'|'RESTART_FAILED'|null $connectorOperationState
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 */
class ConnectorOperationSummary extends Shape
{
    /**
     * @param array{
     *     connectorOperationArn?: string|null,
     *     connectorOperationType?: 'UPDATE_WORKER_SETTING'|'UPDATE_CONNECTOR_CONFIGURATION'|'ISOLATE_CONNECTOR'|'RESTORE_CONNECTOR'|'RESTART_CONNECTOR'|'PAUSE_CONNECTOR'|'RESUME_CONNECTOR'|null,
     *     connectorOperationState?: 'PENDING'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_FAILED'|'ROLLBACK_COMPLETE'|'PAUSE_COMPLETE'|'PAUSE_FAILED'|'RESUME_COMPLETE'|'RESUME_FAILED'|'PAUSE_IN_PROGRESS'|'RESUME_IN_PROGRESS'|'RESTART_IN_PROGRESS'|'RESTART_COMPLETE'|'RESTART_FAILED'|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
