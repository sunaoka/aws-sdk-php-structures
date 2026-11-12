<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUserPoolSessionConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $UserPoolId
 * @property 'ENABLED'|'DISABLED'|null $UserSessionTracking
 * @property Shapes\UserPoolTokenSessionConfigType|null $TokenSession
 */
class SetUserPoolSessionConfigurationResponse extends Response
{
}
