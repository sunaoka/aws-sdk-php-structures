<?php

namespace Sunaoka\Aws\Structures\DynamoDb\CancelBulkOperation;

trait CancelBulkOperationTrait
{
    /**
     * @param CancelBulkOperationRequest $args
     * @return CancelBulkOperationResponse
     */
    public function cancelBulkOperation(CancelBulkOperationRequest $args)
    {
        $result = parent::cancelBulkOperation($args->toArray());
        return new CancelBulkOperationResponse($result->toArray());
    }
}
