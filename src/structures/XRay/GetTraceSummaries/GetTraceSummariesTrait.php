<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries;

trait GetTraceSummariesTrait
{
    /**
     * @param GetTraceSummariesRequest $args
     * @return GetTraceSummariesResponse
     */
    public function getTraceSummaries(GetTraceSummariesRequest $args)
    {
        $result = parent::getTraceSummaries($args->toArray());
        return new GetTraceSummariesResponse($result->toArray());
    }
}
