<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property 'SIMPLE'|'LDAP' $AuthenticationStrategy
 * @property \Aws\Api\DateTimeResult $Created
 * @property string $Description
 * @property 'ACTIVEMQ'|'RABBITMQ' $EngineType
 * @property string $EngineVersion
 * @property string $Id
 * @property Shapes\ConfigurationRevision $LatestRevision
 * @property string $Name
 * @property array<string, string> $Tags
 */
class DescribeConfigurationResponse extends Response
{
}
