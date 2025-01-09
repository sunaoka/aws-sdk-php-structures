<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DirectoryId
 * @property string $Alias
 * @property string $DirectoryName
 * @property string $RegistrationCode
 * @property list<string> $SubnetIds
 * @property list<string> $DnsIpAddresses
 * @property string $CustomerUserName
 * @property string $IamRoleId
 * @property 'SIMPLE_AD'|'AD_CONNECTOR'|'CUSTOMER_MANAGED'|'AWS_IAM_IDENTITY_CENTER' $DirectoryType
 * @property string $WorkspaceSecurityGroupId
 * @property 'REGISTERING'|'REGISTERED'|'DEREGISTERING'|'DEREGISTERED'|'ERROR' $State
 * @property DefaultWorkspaceCreationProperties $WorkspaceCreationProperties
 * @property list<string> $ipGroupIds
 * @property WorkspaceAccessProperties $WorkspaceAccessProperties
 * @property 'DEDICATED'|'SHARED' $Tenancy
 * @property SelfservicePermissions $SelfservicePermissions
 * @property SamlProperties $SamlProperties
 * @property CertificateBasedAuthProperties $CertificateBasedAuthProperties
 * @property MicrosoftEntraConfig $MicrosoftEntraConfig
 * @property string $WorkspaceDirectoryName
 * @property string $WorkspaceDirectoryDescription
 * @property 'CUSTOMER_MANAGED'|'AWS_DIRECTORY_SERVICE'|'AWS_IAM_IDENTITY_CENTER' $UserIdentityType
 * @property 'PERSONAL'|'POOLS' $WorkspaceType
 * @property IDCConfig $IDCConfig
 * @property ActiveDirectoryConfig $ActiveDirectoryConfig
 * @property StreamingProperties $StreamingProperties
 * @property string $ErrorMessage
 */
class WorkspaceDirectory extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string,
     *     Alias?: string,
     *     DirectoryName?: string,
     *     RegistrationCode?: string,
     *     SubnetIds?: list<string>,
     *     DnsIpAddresses?: list<string>,
     *     CustomerUserName?: string,
     *     IamRoleId?: string,
     *     DirectoryType?: 'SIMPLE_AD'|'AD_CONNECTOR'|'CUSTOMER_MANAGED'|'AWS_IAM_IDENTITY_CENTER',
     *     WorkspaceSecurityGroupId?: string,
     *     State?: 'REGISTERING'|'REGISTERED'|'DEREGISTERING'|'DEREGISTERED'|'ERROR',
     *     WorkspaceCreationProperties?: DefaultWorkspaceCreationProperties,
     *     ipGroupIds?: list<string>,
     *     WorkspaceAccessProperties?: WorkspaceAccessProperties,
     *     Tenancy?: 'DEDICATED'|'SHARED',
     *     SelfservicePermissions?: SelfservicePermissions,
     *     SamlProperties?: SamlProperties,
     *     CertificateBasedAuthProperties?: CertificateBasedAuthProperties,
     *     MicrosoftEntraConfig?: MicrosoftEntraConfig,
     *     WorkspaceDirectoryName?: string,
     *     WorkspaceDirectoryDescription?: string,
     *     UserIdentityType?: 'CUSTOMER_MANAGED'|'AWS_DIRECTORY_SERVICE'|'AWS_IAM_IDENTITY_CENTER',
     *     WorkspaceType?: 'PERSONAL'|'POOLS',
     *     IDCConfig?: IDCConfig,
     *     ActiveDirectoryConfig?: ActiveDirectoryConfig,
     *     StreamingProperties?: StreamingProperties,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
