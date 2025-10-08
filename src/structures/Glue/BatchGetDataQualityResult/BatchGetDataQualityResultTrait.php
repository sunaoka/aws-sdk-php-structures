<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetDataQualityResult;

trait BatchGetDataQualityResultTrait
{
    /**
     * @param BatchGetDataQualityResultRequest $args
     * @return BatchGetDataQualityResultResponse
     */
    public function batchGetDataQualityResult(BatchGetDataQualityResultRequest $args)
    {
        $result = parent::batchGetDataQualityResult($args->toArray());
        return new BatchGetDataQualityResultResponse($result->toArray());
    }
}
