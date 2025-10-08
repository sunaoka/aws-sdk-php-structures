<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCisScanResultDetails;

trait GetCisScanResultDetailsTrait
{
    /**
     * @param GetCisScanResultDetailsRequest $args
     * @return GetCisScanResultDetailsResponse
     */
    public function getCisScanResultDetails(GetCisScanResultDetailsRequest $args)
    {
        $result = parent::getCisScanResultDetails($args->toArray());
        return new GetCisScanResultDetailsResponse($result->toArray());
    }
}
