<?php

namespace Sunaoka\Aws\Structures\PI\GetDimensionKeyDetails;

trait GetDimensionKeyDetailsTrait
{
    /**
     * @param GetDimensionKeyDetailsRequest $args
     * @return GetDimensionKeyDetailsResponse
     */
    public function getDimensionKeyDetails(GetDimensionKeyDetailsRequest $args)
    {
        $result = parent::getDimensionKeyDetails($args->toArray());
        return new GetDimensionKeyDetailsResponse($result->toArray());
    }
}
