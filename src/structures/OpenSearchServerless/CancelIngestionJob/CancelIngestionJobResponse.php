<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CancelIngestionJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ingestionJobId
 * @property string|null $collectionId
 * @property string|null $ingestionJobName
 * @property 'CREATING'|'ACTIVE'|'COMPLETED'|'CANCELLING'|'CANCELLED'|'FAILED'|'CREATE_FAILED'|'CANCEL_FAILED'|null $status
 */
class CancelIngestionJobResponse extends Response
{
}
