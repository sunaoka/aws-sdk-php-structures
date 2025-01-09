<?php

namespace Sunaoka\Aws\Structures\CloudTrail\StopImport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ImportId
 * @property Shapes\ImportSource $ImportSource
 * @property list<string> $Destinations
 * @property 'INITIALIZING'|'IN_PROGRESS'|'FAILED'|'STOPPED'|'COMPLETED' $ImportStatus
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 * @property \Aws\Api\DateTimeResult $StartEventTime
 * @property \Aws\Api\DateTimeResult $EndEventTime
 * @property Shapes\ImportStatistics $ImportStatistics
 */
class StopImportResponse extends Response
{
}
