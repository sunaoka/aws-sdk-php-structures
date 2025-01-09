<?php

namespace Sunaoka\Aws\Structures\Omics\StartReadSetActivationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $sequenceStoreId
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELLING'|'CANCELLED'|'FAILED'|'COMPLETED'|'COMPLETED_WITH_FAILURES' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 */
class StartReadSetActivationJobResponse extends Response
{
}
