<?php

namespace Sunaoka\Aws\Structures\MigrationHub\DescribeApplicationState;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED'|null $ApplicationStatus
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 */
class DescribeApplicationStateResponse extends Response
{
}
