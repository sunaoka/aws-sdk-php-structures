<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $adminPasswordSecretKmsKeyId
 * @property string|null $adminUserPassword
 * @property string|null $adminUsername
 * @property string|null $defaultIamRoleArn
 * @property list<string>|null $iamRoles
 * @property string|null $kmsKeyId
 * @property 's3table'|'cloudwatch'|null $logDestinationType
 * @property list<'useractivitylog'|'userlog'|'connectionlog'>|null $logExports
 * @property bool|null $manageAdminPassword
 * @property string $namespaceName
 * @property 'Enable'|'Disable'|null $s3TableAction
 * @property 'namespace'|'account'|null $s3TableGranularity
 * @property string|null $s3TableKmsKeyId
 * @property list<string>|null $s3TableNames
 */
class UpdateNamespaceRequest extends Request
{
    /**
     * @param array{
     *     adminPasswordSecretKmsKeyId?: string|null,
     *     adminUserPassword?: string|null,
     *     adminUsername?: string|null,
     *     defaultIamRoleArn?: string|null,
     *     iamRoles?: list<string>|null,
     *     kmsKeyId?: string|null,
     *     logDestinationType?: 's3table'|'cloudwatch'|null,
     *     logExports?: list<'useractivitylog'|'userlog'|'connectionlog'>|null,
     *     manageAdminPassword?: bool|null,
     *     namespaceName: string,
     *     s3TableAction?: 'Enable'|'Disable'|null,
     *     s3TableGranularity?: 'namespace'|'account'|null,
     *     s3TableKmsKeyId?: string|null,
     *     s3TableNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
