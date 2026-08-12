<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeLimitsProfile;

trait DescribeLimitsProfileTrait
{
    /**
     * @param DescribeLimitsProfileRequest $args
     * @return DescribeLimitsProfileResponse
     */
    public function describeLimitsProfile(DescribeLimitsProfileRequest $args)
    {
        $result = parent::describeLimitsProfile($args->toArray());
        return new DescribeLimitsProfileResponse($result->toArray());
    }
}
