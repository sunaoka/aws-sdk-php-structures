<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeBulkOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BulkOperationArn
 */
class DescribeBulkOperationRequest extends Request
{
    /**
     * @param array{BulkOperationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
