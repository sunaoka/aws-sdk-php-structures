<?php

namespace Sunaoka\Aws\Structures\Sfn\UpdateStateMachine;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stateMachineArn
 * @property string|null $definition
 * @property string|null $roleArn
 * @property Shapes\LoggingConfiguration|null $loggingConfiguration
 * @property Shapes\TracingConfiguration|null $tracingConfiguration
 * @property bool|null $publish
 * @property string|null $versionDescription
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 */
class UpdateStateMachineRequest extends Request
{
    /**
     * @param array{
     *     stateMachineArn: string,
     *     definition?: string|null,
     *     roleArn?: string|null,
     *     loggingConfiguration?: Shapes\LoggingConfiguration|null,
     *     tracingConfiguration?: Shapes\TracingConfiguration|null,
     *     publish?: bool|null,
     *     versionDescription?: string|null,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
