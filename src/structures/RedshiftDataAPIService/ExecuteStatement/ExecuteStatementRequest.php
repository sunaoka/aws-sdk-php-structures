<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\ExecuteStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string|null $ClusterIdentifier
 * @property string|null $Database
 * @property string|null $DbUser
 * @property list<Shapes\SqlParameter>|null $Parameters
 * @property 'JSON'|'CSV'|null $ResultFormat
 * @property string|null $SecretArn
 * @property string|null $SessionId
 * @property int<0, 86400>|null $SessionKeepAliveSeconds
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
     *     Database?: string|null,
     *     DbUser?: string|null,
     *     Parameters?: list<Shapes\SqlParameter>|null,
     *     ResultFormat?: 'JSON'|'CSV'|null,
     *     SecretArn?: string|null,
     *     SessionId?: string|null,
     *     SessionKeepAliveSeconds?: int<0, 86400>|null,
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
