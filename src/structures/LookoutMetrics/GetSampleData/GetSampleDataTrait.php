<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetSampleData;

trait GetSampleDataTrait
{
    /**
     * @param GetSampleDataRequest $args
     * @return GetSampleDataResponse
     */
    public function getSampleData(GetSampleDataRequest $args)
    {
        $result = parent::getSampleData($args->toArray());
        return new GetSampleDataResponse($result->toArray());
    }
}
