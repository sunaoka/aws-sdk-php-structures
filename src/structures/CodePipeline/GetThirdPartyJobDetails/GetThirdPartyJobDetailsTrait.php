<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetThirdPartyJobDetails;

trait GetThirdPartyJobDetailsTrait
{
    /**
     * @param GetThirdPartyJobDetailsRequest $args
     * @return GetThirdPartyJobDetailsResponse
     */
    public function getThirdPartyJobDetails(GetThirdPartyJobDetailsRequest $args)
    {
        $result = parent::getThirdPartyJobDetails($args->toArray());
        return new GetThirdPartyJobDetailsResponse($result->toArray());
    }
}
