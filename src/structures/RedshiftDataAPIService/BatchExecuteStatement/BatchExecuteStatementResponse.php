<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\BatchExecuteStatement;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Id
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $ClusterIdentifier
 * @property string|null $DbUser
 * @property list<string>|null $DbGroups
 * @property string|null $Database
 * @property string|null $SecretArn
 * @property string|null $WorkgroupName
 * @property string|null $SessionId
 */
class BatchExecuteStatementResponse extends Response
{
}
