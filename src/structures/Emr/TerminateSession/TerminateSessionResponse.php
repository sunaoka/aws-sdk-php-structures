<?php

namespace Sunaoka\Aws\Structures\Emr\TerminateSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ClusterId
 * @property string $SessionId
 * @property 'SUBMITTED'|'STARTING'|'STARTED'|'IDLE'|'BUSY'|'TERMINATING'|'TERMINATED'|'FAILED' $State
 */
class TerminateSessionResponse extends Response
{
}
