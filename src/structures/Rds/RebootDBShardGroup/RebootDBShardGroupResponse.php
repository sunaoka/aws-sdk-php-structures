<?php

namespace Sunaoka\Aws\Structures\Rds\RebootDBShardGroup;

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
 */
class RebootDBShardGroupResponse extends Response
{
}
