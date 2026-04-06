<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminGetUser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Username
 * @property list<Shapes\AttributeType>|null $UserAttributes
 * @property \Aws\Api\DateTimeResult|null $UserCreateDate
 * @property \Aws\Api\DateTimeResult|null $UserLastModifiedDate
 * @property bool|null $Enabled
 * @property 'UNCONFIRMED'|'CONFIRMED'|'ARCHIVED'|'COMPROMISED'|'UNKNOWN'|'RESET_REQUIRED'|'FORCE_CHANGE_PASSWORD'|'EXTERNAL_PROVIDER'|null $UserStatus
 * @property list<Shapes\MFAOptionType>|null $MFAOptions
 * @property string|null $PreferredMfaSetting
 * @property list<string>|null $UserMFASettingList
 */
class AdminGetUserResponse extends Response
{
}
