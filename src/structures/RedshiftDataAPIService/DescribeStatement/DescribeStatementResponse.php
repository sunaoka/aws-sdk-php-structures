<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\DescribeStatement;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ClusterIdentifier
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $Database
 * @property string|null $DbUser
 * @property int|null $Duration
 * @property string|null $Error
 * @property bool|null $HasResultSet
 * @property string $Id
 * @property list<Shapes\SqlParameter>|null $QueryParameters
 * @property string|null $QueryString
 * @property int|null $RedshiftPid
 * @property int|null $RedshiftQueryId
 * @property 'JSON'|'CSV'|null $ResultFormat
 * @property int|null $ResultRows
 * @property int|null $ResultSize
 * @property string|null $SecretArn
 * @property string|null $SessionId
 * @property 'SUBMITTED'|'PICKED'|'STARTED'|'FINISHED'|'ABORTED'|'FAILED'|'ALL'|null $Status
 * @property list<Shapes\SubStatementData>|null $SubStatements
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $WorkgroupName
 */
class DescribeStatementResponse extends Response
{
}
