<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceOperations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property list<Shapes\ServiceOperation> $ServiceOperations
 * @property string $NextToken
 */
class ListServiceOperationsResponse extends Response
{
}
