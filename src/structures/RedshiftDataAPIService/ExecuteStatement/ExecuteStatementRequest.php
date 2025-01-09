<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\ExecuteStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $ClusterIdentifier
 * @property string $Database
 * @property string $DbUser
 * @property list<Shapes\SqlParameter> $Parameters
 * @property 'JSON'|'CSV' $ResultFormat
 * @property string $SecretArn
 * @property string $SessionId
 * @property int<0, 86400> $SessionKeepAliveSeconds
 * @property string $Sql
 * @property string $StatementName
 * @property bool $WithEvent
 * @property string $WorkgroupName
 */
class ExecuteStatementRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     ClusterIdentifier?: string,
     *     Database?: string,
     *     DbUser?: string,
     *     Parameters?: list<Shapes\SqlParameter>,
     *     ResultFormat?: 'JSON'|'CSV',
     *     SecretArn?: string,
     *     SessionId?: string,
     *     SessionKeepAliveSeconds?: int<0, 86400>,
     *     Sql: string,
     *     StatementName?: string,
     *     WithEvent?: bool,
     *     WorkgroupName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
