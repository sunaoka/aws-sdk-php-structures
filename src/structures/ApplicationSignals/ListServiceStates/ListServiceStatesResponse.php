<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceStates;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property list<Shapes\ServiceState> $ServiceStates
 * @property string|null $NextToken
 */
class ListServiceStatesResponse extends Response
{
}
