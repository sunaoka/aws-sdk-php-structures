<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteNetwork;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property list<string>|null $AssociatedClusterIds
 * @property string|null $Id
 * @property list<Shapes\IpPool>|null $IpPools
 * @property string|null $Name
 * @property list<Shapes\Route>|null $Routes
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'IDLE'|'IN_USE'|'UPDATING'|'DELETE_FAILED'|'DELETED'|null $State
 */
class DeleteNetworkResponse extends Response
{
}
