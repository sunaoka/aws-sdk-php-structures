<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\BatchExecuteStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $ClusterIdentifier
 * @property string $Database
 * @property string $DbUser
 * @property 'JSON'|'CSV' $ResultFormat
 * @property string $SecretArn
 * @property string $SessionId
 * @property int $SessionKeepAliveSeconds
 * @property list<string> $Sqls
 * @property string $StatementName
 * @property bool $WithEvent
 * @property string $WorkgroupName
 */
class BatchExecuteStatementRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     ClusterIdentifier?: string,
     *     Database?: string,
     *     DbUser?: string,
     *     ResultFormat?: 'JSON'|'CSV',
     *     SecretArn?: string,
     *     SessionId?: string,
     *     SessionKeepAliveSeconds?: int,
     *     Sqls: list<string>,
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
