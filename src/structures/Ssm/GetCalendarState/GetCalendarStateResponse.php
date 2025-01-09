<?php

namespace Sunaoka\Aws\Structures\Ssm\GetCalendarState;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'OPEN'|'CLOSED' $State
 * @property string $AtTime
 * @property string $NextTransitionTime
 */
class GetCalendarStateResponse extends Response
{
}
