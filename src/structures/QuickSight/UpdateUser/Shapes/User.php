<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $UserName
 * @property string|null $Email
 * @property 'ADMIN'|'AUTHOR'|'READER'|'RESTRICTED_AUTHOR'|'RESTRICTED_READER'|'ADMIN_PRO'|'AUTHOR_PRO'|'READER_PRO'|null $Role
 * @property 'IAM'|'QUICKSIGHT'|'IAM_IDENTITY_CENTER'|null $IdentityType
 * @property bool|null $Active
 * @property string|null $PrincipalId
 * @property string|null $CustomPermissionsName
 * @property string|null $ExternalLoginFederationProviderType
 * @property string|null $ExternalLoginFederationProviderUrl
 * @property string|null $ExternalLoginId
 */
class User extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     UserName?: string|null,
     *     Email?: string|null,
     *     Role?: 'ADMIN'|'AUTHOR'|'READER'|'RESTRICTED_AUTHOR'|'RESTRICTED_READER'|'ADMIN_PRO'|'AUTHOR_PRO'|'READER_PRO'|null,
     *     IdentityType?: 'IAM'|'QUICKSIGHT'|'IAM_IDENTITY_CENTER'|null,
     *     Active?: bool|null,
     *     PrincipalId?: string|null,
     *     CustomPermissionsName?: string|null,
     *     ExternalLoginFederationProviderType?: string|null,
     *     ExternalLoginFederationProviderUrl?: string|null,
     *     ExternalLoginId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
