<?php

namespace Sunaoka\Aws\Structures\Sfn\CreateStateMachine;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $definition
 * @property string $roleArn
 * @property 'STANDARD'|'EXPRESS'|null $type
 * @property Shapes\LoggingConfiguration|null $loggingConfiguration
 * @property list<Shapes\Tag>|null $tags
 * @property Shapes\TracingConfiguration|null $tracingConfiguration
 * @property bool|null $publish
 * @property string|null $versionDescription
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 */
class CreateStateMachineRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     definition: string,
     *     roleArn: string,
     *     type?: 'STANDARD'|'EXPRESS'|null,
     *     loggingConfiguration?: Shapes\LoggingConfiguration|null,
     *     tags?: list<Shapes\Tag>|null,
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
