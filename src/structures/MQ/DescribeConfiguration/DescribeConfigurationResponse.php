<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property 'SIMPLE'|'LDAP'|'CONFIG_MANAGED'|null $AuthenticationStrategy
 * @property \Aws\Api\DateTimeResult|null $Created
 * @property string|null $Description
 * @property 'ACTIVEMQ'|'RABBITMQ'|null $EngineType
 * @property string|null $EngineVersion
 * @property string|null $Id
 * @property Shapes\ConfigurationRevision|null $LatestRevision
 * @property string|null $Name
 * @property array<string, string>|null $Tags
 */
class DescribeConfigurationResponse extends Response
{
}
