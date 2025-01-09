<?php

namespace Sunaoka\Aws\Structures\MQ\ListConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property 'SIMPLE'|'LDAP' $AuthenticationStrategy
 * @property \Aws\Api\DateTimeResult $Created
 * @property string $Description
 * @property 'ACTIVEMQ'|'RABBITMQ' $EngineType
 * @property string $EngineVersion
 * @property string $Id
 * @property ConfigurationRevision $LatestRevision
 * @property string $Name
 * @property array<string, string> $Tags
 */
class Configuration extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     AuthenticationStrategy: 'SIMPLE'|'LDAP',
     *     Created: \Aws\Api\DateTimeResult,
     *     Description: string,
     *     EngineType: 'ACTIVEMQ'|'RABBITMQ',
     *     EngineVersion: string,
     *     Id: string,
     *     LatestRevision: ConfigurationRevision,
     *     Name: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
