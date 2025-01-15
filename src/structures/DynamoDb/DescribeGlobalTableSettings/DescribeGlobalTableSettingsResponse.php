<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeGlobalTableSettings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $GlobalTableName
 * @property list<Shapes\ReplicaSettingsDescription>|null $ReplicaSettings
 */
class DescribeGlobalTableSettingsResponse extends Response
{
}
