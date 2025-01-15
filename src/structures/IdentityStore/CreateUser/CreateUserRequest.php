<?php

namespace Sunaoka\Aws\Structures\IdentityStore\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityStoreId
 * @property string|null $UserName
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
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     UserName?: string|null,
     *     Name?: Shapes\Name|null,
     *     DisplayName?: string|null,
     *     NickName?: string|null,
     *     ProfileUrl?: string|null,
     *     Emails?: list<Shapes\Email>|null,
     *     Addresses?: list<Shapes\Address>|null,
     *     PhoneNumbers?: list<Shapes\PhoneNumber>|null,
     *     UserType?: string|null,
     *     Title?: string|null,
     *     PreferredLanguage?: string|null,
     *     Locale?: string|null,
     *     Timezone?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
