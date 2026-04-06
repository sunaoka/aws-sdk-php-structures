<?php

namespace Sunaoka\Aws\Structures\MQ\CreateConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SIMPLE'|'LDAP'|null $AuthenticationStrategy
 * @property 'ACTIVEMQ'|'RABBITMQ' $EngineType
 * @property string|null $EngineVersion
 * @property string $Name
 * @property array<string, string>|null $Tags
 */
class CreateConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationStrategy?: 'SIMPLE'|'LDAP'|null,
     *     EngineType: 'ACTIVEMQ'|'RABBITMQ',
     *     EngineVersion?: string|null,
     *     Name: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
