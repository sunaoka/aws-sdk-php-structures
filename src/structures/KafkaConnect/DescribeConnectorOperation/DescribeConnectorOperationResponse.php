<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnectorOperation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $connectorArn
 * @property string|null $connectorOperationArn
 * @property 'PENDING'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_FAILED'|'ROLLBACK_COMPLETE'|'PAUSE_COMPLETE'|'PAUSE_FAILED'|'RESUME_COMPLETE'|'RESUME_FAILED'|'PAUSE_IN_PROGRESS'|'RESUME_IN_PROGRESS'|'RESTART_IN_PROGRESS'|'RESTART_COMPLETE'|'RESTART_FAILED'|null $connectorOperationState
 * @property 'UPDATE_WORKER_SETTING'|'UPDATE_CONNECTOR_CONFIGURATION'|'ISOLATE_CONNECTOR'|'RESTORE_CONNECTOR'|'RESTART_CONNECTOR'|'PAUSE_CONNECTOR'|'RESUME_CONNECTOR'|null $connectorOperationType
 * @property list<Shapes\ConnectorOperationStep>|null $operationSteps
 * @property Shapes\WorkerSetting|null $originWorkerSetting
 * @property array<string, string>|null $originConnectorConfiguration
 * @property Shapes\WorkerSetting|null $targetWorkerSetting
 * @property array<string, string>|null $targetConnectorConfiguration
 * @property Shapes\StateDescription|null $errorInfo
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 */
class DescribeConnectorOperationResponse extends Response
{
}
