<?php

namespace Sunaoka\Aws\Structures\IdentityStore\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityStoreId
 * @property string $UserName
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
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     UserName?: string,
     *     Name?: Shapes\Name,
     *     DisplayName?: string,
     *     NickName?: string,
     *     ProfileUrl?: string,
     *     Emails?: list<Shapes\Email>,
     *     Addresses?: list<Shapes\Address>,
     *     PhoneNumbers?: list<Shapes\PhoneNumber>,
     *     UserType?: string,
     *     Title?: string,
     *     PreferredLanguage?: string,
     *     Locale?: string,
     *     Timezone?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
