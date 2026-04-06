<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $adminUserPassword
 * @property string|null $adminUsername
 * @property string|null $dbName
 * @property string|null $defaultIamRoleArn
 * @property list<string>|null $iamRoles
 * @property string|null $kmsKeyId
 * @property list<'useractivitylog'|'userlog'|'connectionlog'>|null $logExports
 * @property string $namespaceName
 * @property list<Shapes\Tag>|null $tags
 */
class CreateNamespaceRequest extends Request
{
    /**
     * @param array{
     *     adminUserPassword?: string|null,
     *     adminUsername?: string|null,
     *     dbName?: string|null,
     *     defaultIamRoleArn?: string|null,
     *     iamRoles?: list<string>|null,
     *     kmsKeyId?: string|null,
     *     logExports?: list<'useractivitylog'|'userlog'|'connectionlog'>|null,
     *     namespaceName: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
