<?php

namespace Sunaoka\Aws\Structures\MQ\CreateConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property 'SIMPLE'|'LDAP'|null $AuthenticationStrategy
 * @property \Aws\Api\DateTimeResult|null $Created
 * @property string|null $Id
 * @property Shapes\ConfigurationRevision|null $LatestRevision
 * @property string|null $Name
 */
class CreateConfigurationResponse extends Response
{
}
