<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetJobDetails;

trait GetJobDetailsTrait
{
    /**
     * @param GetJobDetailsRequest $args
     * @return GetJobDetailsResponse
     */
    public function getJobDetails(GetJobDetailsRequest $args)
    {
        $result = parent::getJobDetails($args->toArray());
        return new GetJobDetailsResponse($result->toArray());
    }
}
