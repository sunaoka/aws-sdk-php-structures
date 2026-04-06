<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $adminUserPassword
 * @property string|null $adminUsername
 * @property string|null $defaultIamRoleArn
 * @property list<string>|null $iamRoles
 * @property string|null $kmsKeyId
 * @property list<'useractivitylog'|'userlog'|'connectionlog'>|null $logExports
 * @property string $namespaceName
 */
class UpdateNamespaceRequest extends Request
{
    /**
     * @param array{
     *     adminUserPassword?: string|null,
     *     adminUsername?: string|null,
     *     defaultIamRoleArn?: string|null,
     *     iamRoles?: list<string>|null,
     *     kmsKeyId?: string|null,
     *     logExports?: list<'useractivitylog'|'userlog'|'connectionlog'>|null,
     *     namespaceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
