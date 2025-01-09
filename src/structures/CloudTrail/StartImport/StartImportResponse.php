<?php

namespace Sunaoka\Aws\Structures\CloudTrail\StartImport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ImportId
 * @property list<string> $Destinations
 * @property Shapes\ImportSource $ImportSource
 * @property \Aws\Api\DateTimeResult $StartEventTime
 * @property \Aws\Api\DateTimeResult $EndEventTime
 * @property 'INITIALIZING'|'IN_PROGRESS'|'FAILED'|'STOPPED'|'COMPLETED' $ImportStatus
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 */
class StartImportResponse extends Response
{
}
