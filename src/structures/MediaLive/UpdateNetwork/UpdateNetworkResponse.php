<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateNetwork;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property list<string> $AssociatedClusterIds
 * @property string $Id
 * @property list<Shapes\IpPool> $IpPools
 * @property string $Name
 * @property list<Shapes\Route> $Routes
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'IDLE'|'IN_USE'|'UPDATING'|'DELETE_FAILED'|'DELETED' $State
 */
class UpdateNetworkResponse extends Response
{
}
