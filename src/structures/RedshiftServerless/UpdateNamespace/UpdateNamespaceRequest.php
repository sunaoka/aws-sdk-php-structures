<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $adminPasswordSecretKmsKeyId
 * @property string $adminUserPassword
 * @property string $adminUsername
 * @property string $defaultIamRoleArn
 * @property list<string> $iamRoles
 * @property string $kmsKeyId
 * @property list<'useractivitylog'|'userlog'|'connectionlog'> $logExports
 * @property bool $manageAdminPassword
 * @property string $namespaceName
 */
class UpdateNamespaceRequest extends Request
{
    /**
     * @param array{
     *     adminPasswordSecretKmsKeyId?: string,
     *     adminUserPassword?: string,
     *     adminUsername?: string,
     *     defaultIamRoleArn?: string,
     *     iamRoles?: list<string>,
     *     kmsKeyId?: string,
     *     logExports?: list<'useractivitylog'|'userlog'|'connectionlog'>,
     *     manageAdminPassword?: bool,
     *     namespaceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
