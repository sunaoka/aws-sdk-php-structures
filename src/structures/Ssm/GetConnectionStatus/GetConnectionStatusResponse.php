<?php

namespace Sunaoka\Aws\Structures\Ssm\GetConnectionStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Target
 * @property 'connected'|'notconnected'|null $Status
 */
class GetConnectionStatusResponse extends Response
{
}
