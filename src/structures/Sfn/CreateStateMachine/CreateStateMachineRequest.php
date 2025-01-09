<?php

namespace Sunaoka\Aws\Structures\Sfn\CreateStateMachine;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $definition
 * @property string $roleArn
 * @property 'STANDARD'|'EXPRESS' $type
 * @property Shapes\LoggingConfiguration $loggingConfiguration
 * @property list<Shapes\Tag> $tags
 * @property Shapes\TracingConfiguration $tracingConfiguration
 * @property bool $publish
 * @property string $versionDescription
 * @property Shapes\EncryptionConfiguration $encryptionConfiguration
 */
class CreateStateMachineRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     definition: string,
     *     roleArn: string,
     *     type?: 'STANDARD'|'EXPRESS',
     *     loggingConfiguration?: Shapes\LoggingConfiguration,
     *     tags?: list<Shapes\Tag>,
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
