<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\ExecuteStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string|null $ClusterIdentifier
 * @property string $Database
 * @property string|null $DbUser
 * @property list<Shapes\SqlParameter>|null $Parameters
 * @property string|null $SecretArn
 * @property string $Sql
 * @property string|null $StatementName
 * @property bool|null $WithEvent
 * @property string|null $WorkgroupName
 */
class ExecuteStatementRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     ClusterIdentifier?: string|null,
     *     Database: string,
     *     DbUser?: string|null,
     *     Parameters?: list<Shapes\SqlParameter>|null,
     *     SecretArn?: string|null,
     *     Sql: string,
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
