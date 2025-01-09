<?php

namespace Sunaoka\Aws\Structures\MigrationHub\DescribeApplicationState;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED' $ApplicationStatus
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 */
class DescribeApplicationStateResponse extends Response
{
}
