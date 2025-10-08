<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityResult;

trait GetDataQualityResultTrait
{
    /**
     * @param GetDataQualityResultRequest $args
     * @return GetDataQualityResultResponse
     */
    public function getDataQualityResult(GetDataQualityResultRequest $args)
    {
        $result = parent::getDataQualityResult($args->toArray());
        return new GetDataQualityResultResponse($result->toArray());
    }
}
