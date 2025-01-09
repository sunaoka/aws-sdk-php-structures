<?php

namespace Sunaoka\Aws\Structures\MQ\CreateConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SIMPLE'|'LDAP' $AuthenticationStrategy
 * @property 'ACTIVEMQ'|'RABBITMQ' $EngineType
 * @property string $EngineVersion
 * @property string $Name
 * @property array<string, string> $Tags
 */
class CreateConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationStrategy?: 'SIMPLE'|'LDAP',
     *     EngineType: 'ACTIVEMQ'|'RABBITMQ',
     *     EngineVersion?: string,
     *     Name: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
