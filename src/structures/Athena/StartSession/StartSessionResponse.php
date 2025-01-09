<?php

namespace Sunaoka\Aws\Structures\Athena\StartSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SessionId
 * @property 'CREATING'|'CREATED'|'IDLE'|'BUSY'|'TERMINATING'|'TERMINATED'|'DEGRADED'|'FAILED' $State
 */
class StartSessionResponse extends Response
{
}
