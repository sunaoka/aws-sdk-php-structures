<?php

namespace Sunaoka\Aws\Structures\WorkMail\UpdateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $UserId
 * @property 'USER'|'RESOURCE'|'SYSTEM_USER'|'REMOTE_USER'|null $Role
 * @property string|null $DisplayName
 * @property string|null $FirstName
 * @property string|null $LastName
 * @property bool|null $HiddenFromGlobalAddressList
 * @property string|null $Initials
 * @property string|null $Telephone
 * @property string|null $Street
 * @property string|null $JobTitle
 * @property string|null $City
 * @property string|null $Company
 * @property string|null $ZipCode
 * @property string|null $Department
 * @property string|null $Country
 * @property string|null $Office
 * @property string|null $IdentityProviderUserId
 */
class UpdateUserRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     UserId: string,
     *     Role?: 'USER'|'RESOURCE'|'SYSTEM_USER'|'REMOTE_USER'|null,
     *     DisplayName?: string|null,
     *     FirstName?: string|null,
     *     LastName?: string|null,
     *     HiddenFromGlobalAddressList?: bool|null,
     *     Initials?: string|null,
     *     Telephone?: string|null,
     *     Street?: string|null,
     *     JobTitle?: string|null,
     *     City?: string|null,
     *     Company?: string|null,
     *     ZipCode?: string|null,
     *     Department?: string|null,
     *     Country?: string|null,
     *     Office?: string|null,
     *     IdentityProviderUserId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
