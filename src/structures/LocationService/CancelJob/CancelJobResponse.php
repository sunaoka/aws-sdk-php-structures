<?php

namespace Sunaoka\Aws\Structures\LocationService\CancelJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobArn
 * @property string $JobId
 * @property 'Pending'|'Running'|'Completed'|'Failed'|'Cancelling'|'Cancelled' $Status
 */
class CancelJobResponse extends Response
{
}
