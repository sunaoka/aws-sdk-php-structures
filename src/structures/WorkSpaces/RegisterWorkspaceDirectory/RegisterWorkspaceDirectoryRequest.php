<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\RegisterWorkspaceDirectory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DirectoryId
 * @property list<string>|null $SubnetIds
 * @property bool|null $EnableWorkDocs
 * @property bool|null $EnableSelfService
 * @property 'DEDICATED'|'SHARED'|null $Tenancy
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $WorkspaceDirectoryName
 * @property string|null $WorkspaceDirectoryDescription
 * @property 'CUSTOMER_MANAGED'|'AWS_DIRECTORY_SERVICE'|'AWS_IAM_IDENTITY_CENTER'|null $UserIdentityType
 * @property string|null $IdcInstanceArn
 * @property Shapes\MicrosoftEntraConfig|null $MicrosoftEntraConfig
 * @property 'PERSONAL'|'POOLS'|null $WorkspaceType
 * @property Shapes\ActiveDirectoryConfig|null $ActiveDirectoryConfig
 */
class RegisterWorkspaceDirectoryRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId?: string|null,
     *     SubnetIds?: list<string>|null,
     *     EnableWorkDocs?: bool|null,
     *     EnableSelfService?: bool|null,
     *     Tenancy?: 'DEDICATED'|'SHARED'|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     WorkspaceDirectoryName?: string|null,
     *     WorkspaceDirectoryDescription?: string|null,
     *     UserIdentityType?: 'CUSTOMER_MANAGED'|'AWS_DIRECTORY_SERVICE'|'AWS_IAM_IDENTITY_CENTER'|null,
     *     IdcInstanceArn?: string|null,
     *     MicrosoftEntraConfig?: Shapes\MicrosoftEntraConfig|null,
     *     WorkspaceType?: 'PERSONAL'|'POOLS'|null,
     *     ActiveDirectoryConfig?: Shapes\ActiveDirectoryConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
