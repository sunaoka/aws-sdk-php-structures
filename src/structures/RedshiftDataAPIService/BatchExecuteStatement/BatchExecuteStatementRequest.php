<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\BatchExecuteStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Sqls
 * @property string|null $ClusterIdentifier
 * @property string|null $SecretArn
 * @property string|null $DbUser
 * @property string|null $Database
 * @property bool|null $WithEvent
 * @property string|null $StatementName
 * @property string|null $WorkgroupName
 * @property string|null $ClientToken
 * @property 'JSON'|'CSV'|null $ResultFormat
 * @property int<0, 86400>|null $SessionKeepAliveSeconds
 * @property string|null $SessionId
 */
class BatchExecuteStatementRequest extends Request
{
    /**
     * @param array{
     *     Sqls: list<string>,
     *     ClusterIdentifier?: string|null,
     *     SecretArn?: string|null,
     *     DbUser?: string|null,
     *     Database?: string|null,
     *     WithEvent?: bool|null,
     *     StatementName?: string|null,
     *     WorkgroupName?: string|null,
     *     ClientToken?: string|null,
     *     ResultFormat?: 'JSON'|'CSV'|null,
     *     SessionKeepAliveSeconds?: int<0, 86400>|null,
     *     SessionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
