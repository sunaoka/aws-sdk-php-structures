<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\RestoreFromSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $adminPasswordSecretArn
 * @property string|null $adminPasswordSecretKmsKeyId
 * @property string|null $adminUsername
 * @property string|null $catalogArn
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property string|null $dbName
 * @property string|null $defaultIamRoleArn
 * @property list<string>|null $iamRoles
 * @property string|null $kmsKeyId
 * @property string|null $lakehouseRegistrationStatus
 * @property list<'useractivitylog'|'userlog'|'connectionlog'>|null $logExports
 * @property string|null $namespaceArn
 * @property string|null $namespaceId
 * @property string|null $namespaceName
 * @property 'AVAILABLE'|'MODIFYING'|'DELETING'|null $status
 */
class NamespaceShape extends Shape
{
    /**
     * @param array{
     *     adminPasswordSecretArn?: string|null,
     *     adminPasswordSecretKmsKeyId?: string|null,
     *     adminUsername?: string|null,
     *     catalogArn?: string|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     dbName?: string|null,
     *     defaultIamRoleArn?: string|null,
     *     iamRoles?: list<string>|null,
     *     kmsKeyId?: string|null,
     *     lakehouseRegistrationStatus?: string|null,
     *     logExports?: list<'useractivitylog'|'userlog'|'connectionlog'>|null,
     *     namespaceArn?: string|null,
     *     namespaceId?: string|null,
     *     namespaceName?: string|null,
     *     status?: 'AVAILABLE'|'MODIFYING'|'DELETING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
