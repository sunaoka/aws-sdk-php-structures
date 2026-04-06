<?php

namespace Sunaoka\Aws\Structures\Braket\CancelJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobArn
 * @property 'CANCELLING'|'CANCELLED' $cancellationStatus
 */
class CancelJobResponse extends Response
{
}
