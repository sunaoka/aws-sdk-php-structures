<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\GetService;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Service $Service
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property list<array<string, string>> $LogGroupReferences
 */
class GetServiceResponse extends Response
{
}
