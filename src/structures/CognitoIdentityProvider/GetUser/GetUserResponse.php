<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Username
 * @property list<Shapes\AttributeType> $UserAttributes
 * @property list<Shapes\MFAOptionType> $MFAOptions
 * @property string $PreferredMfaSetting
 * @property list<string> $UserMFASettingList
 */
class GetUserResponse extends Response
{
}
