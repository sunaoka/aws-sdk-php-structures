<?php

namespace Sunaoka\Aws\Structures\QuickSight\RegisterUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'IAM'|'QUICKSIGHT'|'IAM_IDENTITY_CENTER' $IdentityType
 * @property string $Email
 * @property 'ADMIN'|'AUTHOR'|'READER'|'RESTRICTED_AUTHOR'|'RESTRICTED_READER' $UserRole
 * @property string|null $IamArn
 * @property string|null $SessionName
 * @property string $AwsAccountId
 * @property string $Namespace
 * @property string|null $UserName
 * @property string|null $CustomPermissionsName
 * @property string|null $ExternalLoginFederationProviderType
 * @property string|null $CustomFederationProviderUrl
 * @property string|null $ExternalLoginId
 */
class RegisterUserRequest extends Request
{
    /**
     * @param array{
     *     IdentityType: 'IAM'|'QUICKSIGHT'|'IAM_IDENTITY_CENTER',
     *     Email: string,
     *     UserRole: 'ADMIN'|'AUTHOR'|'READER'|'RESTRICTED_AUTHOR'|'RESTRICTED_READER',
     *     IamArn?: string|null,
     *     SessionName?: string|null,
     *     AwsAccountId: string,
     *     Namespace: string,
     *     UserName?: string|null,
     *     CustomPermissionsName?: string|null,
     *     ExternalLoginFederationProviderType?: string|null,
     *     CustomFederationProviderUrl?: string|null,
     *     ExternalLoginId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
