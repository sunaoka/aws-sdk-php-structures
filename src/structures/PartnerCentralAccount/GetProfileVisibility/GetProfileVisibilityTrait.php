<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\GetProfileVisibility;

trait GetProfileVisibilityTrait
{
    /**
     * @param GetProfileVisibilityRequest $args
     * @return GetProfileVisibilityResponse
     */
    public function getProfileVisibility(GetProfileVisibilityRequest $args)
    {
        $result = parent::getProfileVisibility($args->toArray());
        return new GetProfileVisibilityResponse($result->toArray());
    }
}
