<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $AwsAccountId
 * @property string $Namespace
 * @property string $Email
 * @property 'ADMIN'|'AUTHOR'|'READER'|'RESTRICTED_AUTHOR'|'RESTRICTED_READER'|'ADMIN_PRO'|'AUTHOR_PRO'|'READER_PRO' $Role
 * @property string $CustomPermissionsName
 * @property bool $UnapplyCustomPermissions
 * @property string $ExternalLoginFederationProviderType
 * @property string $CustomFederationProviderUrl
 * @property string $ExternalLoginId
 */
class UpdateUserRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     AwsAccountId: string,
     *     Namespace: string,
     *     Email: string,
     *     Role: 'ADMIN'|'AUTHOR'|'READER'|'RESTRICTED_AUTHOR'|'RESTRICTED_READER'|'ADMIN_PRO'|'AUTHOR_PRO'|'READER_PRO',
     *     CustomPermissionsName?: string,
     *     UnapplyCustomPermissions?: bool,
     *     ExternalLoginFederationProviderType?: string,
     *     CustomFederationProviderUrl?: string,
     *     ExternalLoginId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
