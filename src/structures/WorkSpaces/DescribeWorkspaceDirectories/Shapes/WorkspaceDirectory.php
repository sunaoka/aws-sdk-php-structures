<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DirectoryId
 * @property string|null $Alias
 * @property string|null $DirectoryName
 * @property string|null $RegistrationCode
 * @property list<string>|null $SubnetIds
 * @property list<string>|null $DnsIpAddresses
 * @property list<string>|null $DnsIpv6Addresses
 * @property string|null $CustomerUserName
 * @property string|null $IamRoleId
 * @property 'SIMPLE_AD'|'AD_CONNECTOR'|'CUSTOMER_MANAGED'|'AWS_IAM_IDENTITY_CENTER'|null $DirectoryType
 * @property string|null $WorkspaceSecurityGroupId
 * @property 'REGISTERING'|'REGISTERED'|'DEREGISTERING'|'DEREGISTERED'|'ERROR'|null $State
 * @property DefaultWorkspaceCreationProperties|null $WorkspaceCreationProperties
 * @property list<string>|null $ipGroupIds
 * @property WorkspaceAccessProperties|null $WorkspaceAccessProperties
 * @property 'DEDICATED'|'SHARED'|null $Tenancy
 * @property SelfservicePermissions|null $SelfservicePermissions
 * @property SamlProperties|null $SamlProperties
 * @property CertificateBasedAuthProperties|null $CertificateBasedAuthProperties
 * @property 'STANDARD_TLS'|'FIPS_VALIDATED'|null $EndpointEncryptionMode
 * @property MicrosoftEntraConfig|null $MicrosoftEntraConfig
 * @property string|null $WorkspaceDirectoryName
 * @property string|null $WorkspaceDirectoryDescription
 * @property 'CUSTOMER_MANAGED'|'AWS_DIRECTORY_SERVICE'|'AWS_IAM_IDENTITY_CENTER'|null $UserIdentityType
 * @property 'PERSONAL'|'POOLS'|null $WorkspaceType
 * @property IDCConfig|null $IDCConfig
 * @property ActiveDirectoryConfig|null $ActiveDirectoryConfig
 * @property StreamingProperties|null $StreamingProperties
 * @property string|null $ErrorMessage
 */
class WorkspaceDirectory extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string|null,
     *     Alias?: string|null,
     *     DirectoryName?: string|null,
     *     RegistrationCode?: string|null,
     *     SubnetIds?: list<string>|null,
     *     DnsIpAddresses?: list<string>|null,
     *     DnsIpv6Addresses?: list<string>|null,
     *     CustomerUserName?: string|null,
     *     IamRoleId?: string|null,
     *     DirectoryType?: 'SIMPLE_AD'|'AD_CONNECTOR'|'CUSTOMER_MANAGED'|'AWS_IAM_IDENTITY_CENTER'|null,
     *     WorkspaceSecurityGroupId?: string|null,
     *     State?: 'REGISTERING'|'REGISTERED'|'DEREGISTERING'|'DEREGISTERED'|'ERROR'|null,
     *     WorkspaceCreationProperties?: DefaultWorkspaceCreationProperties|null,
     *     ipGroupIds?: list<string>|null,
     *     WorkspaceAccessProperties?: WorkspaceAccessProperties|null,
     *     Tenancy?: 'DEDICATED'|'SHARED'|null,
     *     SelfservicePermissions?: SelfservicePermissions|null,
     *     SamlProperties?: SamlProperties|null,
     *     CertificateBasedAuthProperties?: CertificateBasedAuthProperties|null,
     *     EndpointEncryptionMode?: 'STANDARD_TLS'|'FIPS_VALIDATED'|null,
     *     MicrosoftEntraConfig?: MicrosoftEntraConfig|null,
     *     WorkspaceDirectoryName?: string|null,
     *     WorkspaceDirectoryDescription?: string|null,
     *     UserIdentityType?: 'CUSTOMER_MANAGED'|'AWS_DIRECTORY_SERVICE'|'AWS_IAM_IDENTITY_CENTER'|null,
     *     WorkspaceType?: 'PERSONAL'|'POOLS'|null,
     *     IDCConfig?: IDCConfig|null,
     *     ActiveDirectoryConfig?: ActiveDirectoryConfig|null,
     *     StreamingProperties?: StreamingProperties|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
