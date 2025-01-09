<?php

namespace Sunaoka\Aws\Structures\Ssm\GetConnectionStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Target
 * @property 'connected'|'notconnected' $Status
 */
class GetConnectionStatusResponse extends Response
{
}
