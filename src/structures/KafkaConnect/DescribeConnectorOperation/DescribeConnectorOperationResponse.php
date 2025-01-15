<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnectorOperation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $connectorArn
 * @property string|null $connectorOperationArn
 * @property 'PENDING'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_FAILED'|'ROLLBACK_COMPLETE'|null $connectorOperationState
 * @property 'UPDATE_WORKER_SETTING'|'UPDATE_CONNECTOR_CONFIGURATION'|'ISOLATE_CONNECTOR'|'RESTORE_CONNECTOR'|null $connectorOperationType
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
