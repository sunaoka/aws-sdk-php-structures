<?php

namespace Sunaoka\Aws\Structures\DynamoDb\CancelBulkOperation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $BulkOperationArn
 * @property 'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'CANCELLING'|'CANCELLED'|'FAILED' $BulkOperationStatus
 */
class CancelBulkOperationResponse extends Response
{
}
