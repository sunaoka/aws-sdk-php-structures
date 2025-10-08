<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchPutFieldOptions;

trait BatchPutFieldOptionsTrait
{
    /**
     * @param BatchPutFieldOptionsRequest $args
     * @return BatchPutFieldOptionsResponse
     */
    public function batchPutFieldOptions(BatchPutFieldOptionsRequest $args)
    {
        $result = parent::batchPutFieldOptions($args->toArray());
        return new BatchPutFieldOptionsResponse($result->toArray());
    }
}
