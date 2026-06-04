<?php

namespace Sunaoka\Aws\Structures\Emr\StartSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Id
 * @property string|null $ClusterId
 * @property string|null $Arn
 * @property string|null $AccountId
 * @property 'SUBMITTED'|'STARTING'|'STARTED'|'IDLE'|'BUSY'|'TERMINATING'|'TERMINATED'|'FAILED'|null $State
 */
class StartSessionResponse extends Response
{
}
