<?php

namespace Sunaoka\Aws\Structures\IdentityStore\ListUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserName
 * @property string $UserId
 * @property list<ExternalId> $ExternalIds
 * @property Name $Name
 * @property string $DisplayName
 * @property string $NickName
 * @property string $ProfileUrl
 * @property list<Email> $Emails
 * @property list<Address> $Addresses
 * @property list<PhoneNumber> $PhoneNumbers
 * @property string $UserType
 * @property string $Title
 * @property string $PreferredLanguage
 * @property string $Locale
 * @property string $Timezone
 * @property string $IdentityStoreId
 */
class User extends Shape
{
    /**
     * @param array{
     *     UserName?: string,
     *     UserId: string,
     *     ExternalIds?: list<ExternalId>,
     *     Name?: Name,
     *     DisplayName?: string,
     *     NickName?: string,
     *     ProfileUrl?: string,
     *     Emails?: list<Email>,
     *     Addresses?: list<Address>,
     *     PhoneNumbers?: list<PhoneNumber>,
     *     UserType?: string,
     *     Title?: string,
     *     PreferredLanguage?: string,
     *     Locale?: string,
     *     Timezone?: string,
     *     IdentityStoreId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
