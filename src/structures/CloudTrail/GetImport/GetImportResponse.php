<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetImport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ImportId
 * @property list<string>|null $Destinations
 * @property Shapes\ImportSource|null $ImportSource
 * @property \Aws\Api\DateTimeResult|null $StartEventTime
 * @property \Aws\Api\DateTimeResult|null $EndEventTime
 * @property 'INITIALIZING'|'IN_PROGRESS'|'FAILED'|'STOPPED'|'COMPLETED'|null $ImportStatus
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 * @property Shapes\ImportStatistics|null $ImportStatistics
 */
class GetImportResponse extends Response
{
}
