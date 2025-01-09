<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\DescribeStatement;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ClusterIdentifier
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $Database
 * @property string $DbUser
 * @property int $Duration
 * @property string $Error
 * @property bool $HasResultSet
 * @property string $Id
 * @property list<Shapes\SqlParameter> $QueryParameters
 * @property string $QueryString
 * @property int $RedshiftPid
 * @property int $RedshiftQueryId
 * @property 'JSON'|'CSV' $ResultFormat
 * @property int $ResultRows
 * @property int $ResultSize
 * @property string $SecretArn
 * @property string $SessionId
 * @property 'SUBMITTED'|'PICKED'|'STARTED'|'FINISHED'|'ABORTED'|'FAILED'|'ALL' $Status
 * @property list<Shapes\SubStatementData> $SubStatements
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property string $WorkgroupName
 */
class DescribeStatementResponse extends Response
{
}
