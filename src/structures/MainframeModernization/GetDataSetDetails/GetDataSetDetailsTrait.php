<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetDataSetDetails;

trait GetDataSetDetailsTrait
{
    /**
     * @param GetDataSetDetailsRequest $args
     * @return GetDataSetDetailsResponse
     */
    public function getDataSetDetails(GetDataSetDetailsRequest $args)
    {
        $result = parent::getDataSetDetails($args->toArray());
        return new GetDataSetDetailsResponse($result->toArray());
    }
}
