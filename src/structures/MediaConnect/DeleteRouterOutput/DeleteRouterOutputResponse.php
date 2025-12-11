<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DeleteRouterOutput;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Name
 * @property 'CREATING'|'STANDBY'|'STARTING'|'ACTIVE'|'STOPPING'|'DELETING'|'UPDATING'|'ERROR'|'RECOVERING'|'MIGRATING' $State
 */
class DeleteRouterOutputResponse extends Response
{
}
