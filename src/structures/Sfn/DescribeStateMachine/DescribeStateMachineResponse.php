<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeStateMachine;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $stateMachineArn
 * @property string $name
 * @property 'ACTIVE'|'DELETING' $status
 * @property string $definition
 * @property string $roleArn
 * @property 'STANDARD'|'EXPRESS' $type
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property Shapes\LoggingConfiguration $loggingConfiguration
 * @property Shapes\TracingConfiguration $tracingConfiguration
 * @property string $label
 * @property string $revisionId
 * @property string $description
 * @property Shapes\EncryptionConfiguration $encryptionConfiguration
 * @property array<string, list<string>> $variableReferences
 */
class DescribeStateMachineResponse extends Response
{
}
