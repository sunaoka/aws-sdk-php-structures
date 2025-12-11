<?php

namespace Sunaoka\Aws\Structures\MediaConnect\StopRouterOutput;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Name
 * @property 'CREATING'|'STANDBY'|'STARTING'|'ACTIVE'|'STOPPING'|'DELETING'|'UPDATING'|'ERROR'|'RECOVERING'|'MIGRATING' $State
 */
class StopRouterOutputResponse extends Response
{
}
