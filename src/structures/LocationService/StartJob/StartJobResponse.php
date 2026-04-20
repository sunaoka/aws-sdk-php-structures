<?php

namespace Sunaoka\Aws\Structures\LocationService\StartJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $JobArn
 * @property string $JobId
 * @property 'Pending'|'Running'|'Completed'|'Failed'|'Cancelling'|'Cancelled' $Status
 */
class StartJobResponse extends Response
{
}
