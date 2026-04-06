<?php

namespace Sunaoka\Aws\Structures\NovaAct\CreateAct;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $actId
 * @property 'RUNNING'|'PENDING_CLIENT_ACTION'|'PENDING_HUMAN_ACTION'|'SUCCEEDED'|'FAILED'|'TIMED_OUT' $status
 */
class CreateActResponse extends Response
{
}
