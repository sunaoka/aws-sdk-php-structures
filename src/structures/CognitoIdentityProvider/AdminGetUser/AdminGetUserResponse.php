<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminGetUser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Username
 * @property list<Shapes\AttributeType> $UserAttributes
 * @property \Aws\Api\DateTimeResult $UserCreateDate
 * @property \Aws\Api\DateTimeResult $UserLastModifiedDate
 * @property bool $Enabled
 * @property 'UNCONFIRMED'|'CONFIRMED'|'ARCHIVED'|'COMPROMISED'|'UNKNOWN'|'RESET_REQUIRED'|'FORCE_CHANGE_PASSWORD'|'EXTERNAL_PROVIDER' $UserStatus
 * @property list<Shapes\MFAOptionType> $MFAOptions
 * @property string $PreferredMfaSetting
 * @property list<string> $UserMFASettingList
 */
class AdminGetUserResponse extends Response
{
}
