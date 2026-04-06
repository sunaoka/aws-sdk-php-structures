<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeStateMachine;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $stateMachineArn
 * @property string $name
 * @property 'ACTIVE'|'DELETING'|null $status
 * @property string $definition
 * @property string $roleArn
 * @property 'STANDARD'|'EXPRESS' $type
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property Shapes\LoggingConfiguration|null $loggingConfiguration
 * @property Shapes\TracingConfiguration|null $tracingConfiguration
 * @property string|null $label
 * @property string|null $revisionId
 * @property string|null $description
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 * @property array<string, list<string>>|null $variableReferences
 */
class DescribeStateMachineResponse extends Response
{
}
