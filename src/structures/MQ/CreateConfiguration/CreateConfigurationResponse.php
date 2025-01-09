<?php

namespace Sunaoka\Aws\Structures\MQ\CreateConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property 'SIMPLE'|'LDAP' $AuthenticationStrategy
 * @property \Aws\Api\DateTimeResult $Created
 * @property string $Id
 * @property Shapes\ConfigurationRevision $LatestRevision
 * @property string $Name
 */
class CreateConfigurationResponse extends Response
{
}
