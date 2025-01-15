<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeStateMachineForExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $stateMachineArn
 * @property string $name
 * @property string $definition
 * @property string $roleArn
 * @property \Aws\Api\DateTimeResult $updateDate
 * @property Shapes\LoggingConfiguration|null $loggingConfiguration
 * @property Shapes\TracingConfiguration|null $tracingConfiguration
 * @property string|null $mapRunArn
 * @property string|null $label
 * @property string|null $revisionId
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 * @property array<string, list<string>>|null $variableReferences
 */
class DescribeStateMachineForExecutionResponse extends Response
{
}
