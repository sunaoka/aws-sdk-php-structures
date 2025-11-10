<?php

namespace Sunaoka\Aws\Structures\IdentityStore\ListUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IdentityStoreId
 * @property string $UserId
 * @property string|null $UserName
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
 * @property 'ENABLED'|'DISABLED'|null $UserStatus
 * @property list<Photo>|null $Photos
 * @property string|null $Website
 * @property string|null $Birthdate
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $UpdatedBy
 */
class User extends Shape
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     UserId: string,
     *     UserName?: string|null,
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
     *     UserStatus?: 'ENABLED'|'DISABLED'|null,
     *     Photos?: list<Photo>|null,
     *     Website?: string|null,
     *     Birthdate?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: string|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
