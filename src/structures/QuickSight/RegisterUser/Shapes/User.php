<?php

namespace Sunaoka\Aws\Structures\QuickSight\RegisterUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $UserName
 * @property string $Email
 * @property 'ADMIN'|'AUTHOR'|'READER'|'RESTRICTED_AUTHOR'|'RESTRICTED_READER'|'ADMIN_PRO'|'AUTHOR_PRO'|'READER_PRO' $Role
 * @property 'IAM'|'QUICKSIGHT'|'IAM_IDENTITY_CENTER' $IdentityType
 * @property bool $Active
 * @property string $PrincipalId
 * @property string $CustomPermissionsName
 * @property string $ExternalLoginFederationProviderType
 * @property string $ExternalLoginFederationProviderUrl
 * @property string $ExternalLoginId
 */
class User extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     UserName?: string,
     *     Email?: string,
     *     Role?: 'ADMIN'|'AUTHOR'|'READER'|'RESTRICTED_AUTHOR'|'RESTRICTED_READER'|'ADMIN_PRO'|'AUTHOR_PRO'|'READER_PRO',
     *     IdentityType?: 'IAM'|'QUICKSIGHT'|'IAM_IDENTITY_CENTER',
     *     Active?: bool,
     *     PrincipalId?: string,
     *     CustomPermissionsName?: string,
     *     ExternalLoginFederationProviderType?: string,
     *     ExternalLoginFederationProviderUrl?: string,
     *     ExternalLoginId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
