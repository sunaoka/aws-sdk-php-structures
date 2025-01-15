<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Username
 * @property list<Shapes\AttributeType> $UserAttributes
 * @property list<Shapes\MFAOptionType>|null $MFAOptions
 * @property string|null $PreferredMfaSetting
 * @property list<string>|null $UserMFASettingList
 */
class GetUserResponse extends Response
{
}
