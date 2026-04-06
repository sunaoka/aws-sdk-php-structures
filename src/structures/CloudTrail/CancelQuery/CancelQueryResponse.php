<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CancelQuery;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $QueryId
 * @property 'QUEUED'|'RUNNING'|'FINISHED'|'FAILED'|'CANCELLED'|'TIMED_OUT' $QueryStatus
 * @property string|null $EventDataStoreOwnerAccountId
 */
class CancelQueryResponse extends Response
{
}
