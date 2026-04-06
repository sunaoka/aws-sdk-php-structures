<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServices;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property list<Shapes\ServiceSummary> $ServiceSummaries
 * @property string|null $NextToken
 */
class ListServicesResponse extends Response
{
}
