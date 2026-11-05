<?php

namespace Sunaoka\Aws\Structures\DynamoDb\CancelBulkOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BulkOperationArn
 */
class CancelBulkOperationRequest extends Request
{
    /**
     * @param array{BulkOperationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
