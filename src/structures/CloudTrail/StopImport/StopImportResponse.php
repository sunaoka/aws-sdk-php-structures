<?php

namespace Sunaoka\Aws\Structures\CloudTrail\StopImport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ImportId
 * @property Shapes\ImportSource|null $ImportSource
 * @property list<string>|null $Destinations
 * @property 'INITIALIZING'|'IN_PROGRESS'|'FAILED'|'STOPPED'|'COMPLETED'|null $ImportStatus
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $StartEventTime
 * @property \Aws\Api\DateTimeResult|null $EndEventTime
 * @property Shapes\ImportStatistics|null $ImportStatistics
 */
class StopImportResponse extends Response
{
}
