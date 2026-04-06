<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\GetBenefitApplication;

trait GetBenefitApplicationTrait
{
    /**
     * @param GetBenefitApplicationRequest $args
     * @return GetBenefitApplicationResponse
     */
    public function getBenefitApplication(GetBenefitApplicationRequest $args)
    {
        $result = parent::getBenefitApplication($args->toArray());
        return new GetBenefitApplicationResponse($result->toArray());
    }
}
