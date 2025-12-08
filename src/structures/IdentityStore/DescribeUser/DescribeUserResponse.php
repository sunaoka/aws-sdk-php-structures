<?php

namespace Sunaoka\Aws\Structures\IdentityStore\DescribeUser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $IdentityStoreId
 * @property string $UserId
 * @property string|null $UserName
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
 * @property 'ENABLED'|'DISABLED'|null $UserStatus
 * @property list<Shapes\Photo>|null $Photos
 * @property string|null $Website
 * @property string|null $Birthdate
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $UpdatedBy
 * @property array<string, Shapes\AttributeValue>|null $Extensions
 */
class DescribeUserResponse extends Response
{
}
