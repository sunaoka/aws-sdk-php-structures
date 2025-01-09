<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListNamespaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $adminPasswordSecretArn
 * @property string $adminPasswordSecretKmsKeyId
 * @property string $adminUsername
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property string $dbName
 * @property string $defaultIamRoleArn
 * @property list<string> $iamRoles
 * @property string $kmsKeyId
 * @property list<'useractivitylog'|'userlog'|'connectionlog'> $logExports
 * @property string $namespaceArn
 * @property string $namespaceId
 * @property string $namespaceName
 * @property 'AVAILABLE'|'MODIFYING'|'DELETING' $status
 */
class NamespaceShape extends Shape
{
    /**
     * @param array{
     *     adminPasswordSecretArn?: string,
     *     adminPasswordSecretKmsKeyId?: string,
     *     adminUsername?: string,
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     dbName?: string,
     *     defaultIamRoleArn?: string,
     *     iamRoles?: list<string>,
     *     kmsKeyId?: string,
     *     logExports?: list<'useractivitylog'|'userlog'|'connectionlog'>,
     *     namespaceArn?: string,
     *     namespaceId?: string,
     *     namespaceName?: string,
     *     status?: 'AVAILABLE'|'MODIFYING'|'DELETING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
