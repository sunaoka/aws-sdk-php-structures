<?php

namespace Sunaoka\Aws\Structures\IdentityStore\ListUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserName
 * @property string $UserId
 * @property list<ExternalId>|null $ExternalIds
 * @property Name|null $Name
 * @property string|null $DisplayName
 * @property string|null $NickName
 * @property string|null $ProfileUrl
 * @property list<Email>|null $Emails
 * @property list<Address>|null $Addresses
 * @property list<PhoneNumber>|null $PhoneNumbers
 * @property string|null $UserType
 * @property string|null $Title
 * @property string|null $PreferredLanguage
 * @property string|null $Locale
 * @property string|null $Timezone
 * @property string $IdentityStoreId
 */
class User extends Shape
{
    /**
     * @param array{
     *     UserName?: string|null,
     *     UserId: string,
     *     ExternalIds?: list<ExternalId>|null,
     *     Name?: Name|null,
     *     DisplayName?: string|null,
     *     NickName?: string|null,
     *     ProfileUrl?: string|null,
     *     Emails?: list<Email>|null,
     *     Addresses?: list<Address>|null,
     *     PhoneNumbers?: list<PhoneNumber>|null,
     *     UserType?: string|null,
     *     Title?: string|null,
     *     PreferredLanguage?: string|null,
     *     Locale?: string|null,
     *     Timezone?: string|null,
     *     IdentityStoreId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
