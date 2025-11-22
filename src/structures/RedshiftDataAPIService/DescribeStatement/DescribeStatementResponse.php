<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\DescribeStatement;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Id
 * @property string|null $SecretArn
 * @property string|null $DbUser
 * @property string|null $Database
 * @property string|null $ClusterIdentifier
 * @property int|null $Duration
 * @property string|null $Error
 * @property 'SUBMITTED'|'PICKED'|'STARTED'|'FINISHED'|'ABORTED'|'FAILED'|'ALL'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property int|null $RedshiftPid
 * @property bool|null $HasResultSet
 * @property string|null $QueryString
 * @property int|null $ResultRows
 * @property int|null $ResultSize
 * @property int|null $RedshiftQueryId
 * @property list<Shapes\SqlParameter>|null $QueryParameters
 * @property list<Shapes\SubStatementData>|null $SubStatements
 * @property string|null $WorkgroupName
 * @property 'JSON'|'CSV'|null $ResultFormat
 * @property string|null $SessionId
 */
class DescribeStatementResponse extends Response
{
}
