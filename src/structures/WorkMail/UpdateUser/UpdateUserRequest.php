<?php

namespace Sunaoka\Aws\Structures\WorkMail\UpdateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $UserId
 * @property 'USER'|'RESOURCE'|'SYSTEM_USER'|'REMOTE_USER' $Role
 * @property string $DisplayName
 * @property string $FirstName
 * @property string $LastName
 * @property bool $HiddenFromGlobalAddressList
 * @property string $Initials
 * @property string $Telephone
 * @property string $Street
 * @property string $JobTitle
 * @property string $City
 * @property string $Company
 * @property string $ZipCode
 * @property string $Department
 * @property string $Country
 * @property string $Office
 * @property string $IdentityProviderUserId
 */
class UpdateUserRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     UserId: string,
     *     Role?: 'USER'|'RESOURCE'|'SYSTEM_USER'|'REMOTE_USER',
     *     DisplayName?: string,
     *     FirstName?: string,
     *     LastName?: string,
     *     HiddenFromGlobalAddressList?: bool,
     *     Initials?: string,
     *     Telephone?: string,
     *     Street?: string,
     *     JobTitle?: string,
     *     City?: string,
     *     Company?: string,
     *     ZipCode?: string,
     *     Department?: string,
     *     Country?: string,
     *     Office?: string,
     *     IdentityProviderUserId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
