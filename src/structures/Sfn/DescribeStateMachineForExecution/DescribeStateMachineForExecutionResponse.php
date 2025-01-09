<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeStateMachineForExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $stateMachineArn
 * @property string $name
 * @property string $definition
 * @property string $roleArn
 * @property \Aws\Api\DateTimeResult $updateDate
 * @property Shapes\LoggingConfiguration $loggingConfiguration
 * @property Shapes\TracingConfiguration $tracingConfiguration
 * @property string $mapRunArn
 * @property string $label
 * @property string $revisionId
 * @property Shapes\EncryptionConfiguration $encryptionConfiguration
 * @property array<string, list<string>> $variableReferences
 */
class DescribeStateMachineForExecutionResponse extends Response
{
}
