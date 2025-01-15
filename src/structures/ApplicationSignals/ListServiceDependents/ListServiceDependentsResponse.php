<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceDependents;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property list<Shapes\ServiceDependent> $ServiceDependents
 * @property string|null $NextToken
 */
class ListServiceDependentsResponse extends Response
{
}
