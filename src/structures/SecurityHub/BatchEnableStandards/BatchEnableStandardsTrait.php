<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchEnableStandards;

trait BatchEnableStandardsTrait
{
    /**
     * @param BatchEnableStandardsRequest $args
     * @return BatchEnableStandardsResponse
     */
    public function batchEnableStandards(BatchEnableStandardsRequest $args)
    {
        $result = parent::batchEnableStandards($args->toArray());
        return new BatchEnableStandardsResponse($result->toArray());
    }
}
