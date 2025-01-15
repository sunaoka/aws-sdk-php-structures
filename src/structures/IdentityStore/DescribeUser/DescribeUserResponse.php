<?php

namespace Sunaoka\Aws\Structures\IdentityStore\DescribeUser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $UserName
 * @property string $UserId
 * @property list<Shapes\ExternalId>|null $ExternalIds
 * @property Shapes\Name|null $Name
 * @property string|null $DisplayName
 * @property string|null $NickName
 * @property string|null $ProfileUrl
 * @property list<Shapes\Email>|null $Emails
 * @property list<Shapes\Address>|null $Addresses
 * @property list<Shapes\PhoneNumber>|null $PhoneNumbers
 * @property string|null $UserType
 * @property string|null $Title
 * @property string|null $PreferredLanguage
 * @property string|null $Locale
 * @property string|null $Timezone
 * @property string $IdentityStoreId
 */
class DescribeUserResponse extends Response
{
}
