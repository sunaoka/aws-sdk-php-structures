<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\BatchExecuteStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string|null $ClusterIdentifier
 * @property string|null $Database
 * @property string|null $DbUser
 * @property 'JSON'|'CSV'|null $ResultFormat
 * @property string|null $SecretArn
 * @property string|null $SessionId
 * @property int<0, 86400>|null $SessionKeepAliveSeconds
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
     *     Database?: string|null,
     *     DbUser?: string|null,
     *     ResultFormat?: 'JSON'|'CSV'|null,
     *     SecretArn?: string|null,
     *     SessionId?: string|null,
     *     SessionKeepAliveSeconds?: int<0, 86400>|null,
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
