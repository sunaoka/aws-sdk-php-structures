<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\RegisterWorkspaceDirectory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property list<string> $SubnetIds
 * @property bool $EnableWorkDocs
 * @property bool $EnableSelfService
 * @property 'DEDICATED'|'SHARED' $Tenancy
 * @property list<Shapes\Tag> $Tags
 * @property string $WorkspaceDirectoryName
 * @property string $WorkspaceDirectoryDescription
 * @property 'CUSTOMER_MANAGED'|'AWS_DIRECTORY_SERVICE'|'AWS_IAM_IDENTITY_CENTER' $UserIdentityType
 * @property string $IdcInstanceArn
 * @property Shapes\MicrosoftEntraConfig $MicrosoftEntraConfig
 * @property 'PERSONAL'|'POOLS' $WorkspaceType
 * @property Shapes\ActiveDirectoryConfig $ActiveDirectoryConfig
 */
class RegisterWorkspaceDirectoryRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId?: string,
     *     SubnetIds?: list<string>,
     *     EnableWorkDocs?: bool,
     *     EnableSelfService?: bool,
     *     Tenancy?: 'DEDICATED'|'SHARED',
     *     Tags?: list<Shapes\Tag>,
     *     WorkspaceDirectoryName?: string,
     *     WorkspaceDirectoryDescription?: string,
     *     UserIdentityType?: 'CUSTOMER_MANAGED'|'AWS_DIRECTORY_SERVICE'|'AWS_IAM_IDENTITY_CENTER',
     *     IdcInstanceArn?: string,
     *     MicrosoftEntraConfig?: Shapes\MicrosoftEntraConfig,
     *     WorkspaceType?: 'PERSONAL'|'POOLS',
     *     ActiveDirectoryConfig?: Shapes\ActiveDirectoryConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
