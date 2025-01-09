<?php

namespace Sunaoka\Aws\Structures\IdentityStore\DescribeUser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $UserName
 * @property string $UserId
 * @property list<Shapes\ExternalId> $ExternalIds
 * @property Shapes\Name $Name
 * @property string $DisplayName
 * @property string $NickName
 * @property string $ProfileUrl
 * @property list<Shapes\Email> $Emails
 * @property list<Shapes\Address> $Addresses
 * @property list<Shapes\PhoneNumber> $PhoneNumbers
 * @property string $UserType
 * @property string $Title
 * @property string $PreferredLanguage
 * @property string $Locale
 * @property string $Timezone
 * @property string $IdentityStoreId
 */
class DescribeUserResponse extends Response
{
}
