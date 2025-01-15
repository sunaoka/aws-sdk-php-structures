<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBShardGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DBShardGroupResourceId
 * @property string|null $DBShardGroupIdentifier
 * @property string|null $DBClusterIdentifier
 * @property double|null $MaxACU
 * @property double|null $MinACU
 * @property int|null $ComputeRedundancy
 * @property string|null $Status
 * @property bool|null $PubliclyAccessible
 * @property string|null $Endpoint
 * @property string|null $DBShardGroupArn
 * @property list<Shapes\Tag>|null $TagList
 */
class CreateDBShardGroupResponse extends Response
{
}
