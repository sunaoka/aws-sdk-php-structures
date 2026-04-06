<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityModelResult;

trait GetDataQualityModelResultTrait
{
    /**
     * @param GetDataQualityModelResultRequest $args
     * @return GetDataQualityModelResultResponse
     */
    public function getDataQualityModelResult(GetDataQualityModelResultRequest $args)
    {
        $result = parent::getDataQualityModelResult($args->toArray());
        return new GetDataQualityModelResultResponse($result->toArray());
    }
}
