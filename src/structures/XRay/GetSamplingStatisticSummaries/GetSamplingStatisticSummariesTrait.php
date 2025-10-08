<?php

namespace Sunaoka\Aws\Structures\XRay\GetSamplingStatisticSummaries;

trait GetSamplingStatisticSummariesTrait
{
    /**
     * @param GetSamplingStatisticSummariesRequest $args
     * @return GetSamplingStatisticSummariesResponse
     */
    public function getSamplingStatisticSummaries(GetSamplingStatisticSummariesRequest $args)
    {
        $result = parent::getSamplingStatisticSummaries($args->toArray());
        return new GetSamplingStatisticSummariesResponse($result->toArray());
    }
}
