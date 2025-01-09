<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBShardGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DBShardGroupResourceId
 * @property string $DBShardGroupIdentifier
 * @property string $DBClusterIdentifier
 * @property double $MaxACU
 * @property double $MinACU
 * @property int $ComputeRedundancy
 * @property string $Status
 * @property bool $PubliclyAccessible
 * @property string $Endpoint
 * @property string $DBShardGroupArn
 * @property list<Shapes\Tag> $TagList
 */
class CreateDBShardGroupResponse extends Response
{
}
