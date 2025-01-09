<?php

namespace Sunaoka\Aws\Structures\QuickSight\RegisterUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'IAM'|'QUICKSIGHT'|'IAM_IDENTITY_CENTER' $IdentityType
 * @property string $Email
 * @property 'ADMIN'|'AUTHOR'|'READER'|'RESTRICTED_AUTHOR'|'RESTRICTED_READER'|'ADMIN_PRO'|'AUTHOR_PRO'|'READER_PRO' $UserRole
 * @property string $IamArn
 * @property string $SessionName
 * @property string $AwsAccountId
 * @property string $Namespace
 * @property string $UserName
 * @property string $CustomPermissionsName
 * @property string $ExternalLoginFederationProviderType
 * @property string $CustomFederationProviderUrl
 * @property string $ExternalLoginId
 * @property list<Shapes\Tag> $Tags
 */
class RegisterUserRequest extends Request
{
    /**
     * @param array{
     *     IdentityType: 'IAM'|'QUICKSIGHT'|'IAM_IDENTITY_CENTER',
     *     Email: string,
     *     UserRole: 'ADMIN'|'AUTHOR'|'READER'|'RESTRICTED_AUTHOR'|'RESTRICTED_READER'|'ADMIN_PRO'|'AUTHOR_PRO'|'READER_PRO',
     *     IamArn?: string,
     *     SessionName?: string,
     *     AwsAccountId: string,
     *     Namespace: string,
     *     UserName?: string,
     *     CustomPermissionsName?: string,
     *     ExternalLoginFederationProviderType?: string,
     *     CustomFederationProviderUrl?: string,
     *     ExternalLoginId?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
