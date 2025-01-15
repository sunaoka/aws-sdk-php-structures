<?php

namespace Sunaoka\Aws\Structures\Ssm\GetCalendarState;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'OPEN'|'CLOSED'|null $State
 * @property string|null $AtTime
 * @property string|null $NextTransitionTime
 */
class GetCalendarStateResponse extends Response
{
}
