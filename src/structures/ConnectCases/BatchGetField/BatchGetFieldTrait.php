<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchGetField;

trait BatchGetFieldTrait
{
    /**
     * @param BatchGetFieldRequest $args
     * @return BatchGetFieldResponse
     */
    public function batchGetField(BatchGetFieldRequest $args)
    {
        $result = parent::batchGetField($args->toArray());
        return new BatchGetFieldResponse($result->toArray());
    }
}
