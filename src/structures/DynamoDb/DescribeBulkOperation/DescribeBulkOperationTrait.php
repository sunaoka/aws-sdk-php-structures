<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeBulkOperation;

trait DescribeBulkOperationTrait
{
    /**
     * @param DescribeBulkOperationRequest $args
     * @return DescribeBulkOperationResponse
     */
    public function describeBulkOperation(DescribeBulkOperationRequest $args)
    {
        $result = parent::describeBulkOperation($args->toArray());
        return new DescribeBulkOperationResponse($result->toArray());
    }
}
