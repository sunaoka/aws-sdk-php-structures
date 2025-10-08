<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchDisableStandards;

trait BatchDisableStandardsTrait
{
    /**
     * @param BatchDisableStandardsRequest $args
     * @return BatchDisableStandardsResponse
     */
    public function batchDisableStandards(BatchDisableStandardsRequest $args)
    {
        $result = parent::batchDisableStandards($args->toArray());
        return new BatchDisableStandardsResponse($result->toArray());
    }
}
