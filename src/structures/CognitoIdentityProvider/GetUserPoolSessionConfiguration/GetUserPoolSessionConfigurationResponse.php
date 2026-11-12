<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUserPoolSessionConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $UserPoolId
 * @property 'ENABLED'|'DISABLED'|null $UserSessionTracking
 * @property Shapes\UserPoolTokenSessionConfigType|null $TokenSession
 */
class GetUserPoolSessionConfigurationResponse extends Response
{
}
