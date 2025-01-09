<?php

namespace Sunaoka\Aws\Structures\Sfn\UpdateStateMachine;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stateMachineArn
 * @property string $definition
 * @property string $roleArn
 * @property Shapes\LoggingConfiguration $loggingConfiguration
 * @property Shapes\TracingConfiguration $tracingConfiguration
 * @property bool $publish
 * @property string $versionDescription
 * @property Shapes\EncryptionConfiguration $encryptionConfiguration
 */
class UpdateStateMachineRequest extends Request
{
    /**
     * @param array{
     *     stateMachineArn: string,
     *     definition?: string,
     *     roleArn?: string,
     *     loggingConfiguration?: Shapes\LoggingConfiguration,
     *     tracingConfiguration?: Shapes\TracingConfiguration,
     *     publish?: bool,
     *     versionDescription?: string,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
