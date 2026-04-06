<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\BatchExecuteStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string|null $ClusterIdentifier
 * @property string $Database
 * @property string|null $DbUser
 * @property string|null $SecretArn
 * @property list<string> $Sqls
 * @property string|null $StatementName
 * @property bool|null $WithEvent
 * @property string|null $WorkgroupName
 */
class BatchExecuteStatementRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     ClusterIdentifier?: string|null,
     *     Database: string,
     *     DbUser?: string|null,
     *     SecretArn?: string|null,
     *     Sqls: list<string>,
     *     StatementName?: string|null,
     *     WithEvent?: bool|null,
     *     WorkgroupName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
