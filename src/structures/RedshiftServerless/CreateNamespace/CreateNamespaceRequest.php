<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $adminPasswordSecretKmsKeyId
 * @property string $adminUserPassword
 * @property string $adminUsername
 * @property string $dbName
 * @property string $defaultIamRoleArn
 * @property list<string> $iamRoles
 * @property string $kmsKeyId
 * @property list<'useractivitylog'|'userlog'|'connectionlog'> $logExports
 * @property bool $manageAdminPassword
 * @property string $namespaceName
 * @property string $redshiftIdcApplicationArn
 * @property list<Shapes\Tag> $tags
 */
class CreateNamespaceRequest extends Request
{
    /**
     * @param array{
     *     adminPasswordSecretKmsKeyId?: string,
     *     adminUserPassword?: string,
     *     adminUsername?: string,
     *     dbName?: string,
     *     defaultIamRoleArn?: string,
     *     iamRoles?: list<string>,
     *     kmsKeyId?: string,
     *     logExports?: list<'useractivitylog'|'userlog'|'connectionlog'>,
     *     manageAdminPassword?: bool,
     *     namespaceName: string,
     *     redshiftIdcApplicationArn?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
