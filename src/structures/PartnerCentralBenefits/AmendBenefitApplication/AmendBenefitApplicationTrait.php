<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\AmendBenefitApplication;

trait AmendBenefitApplicationTrait
{
    /**
     * @param AmendBenefitApplicationRequest $args
     * @return AmendBenefitApplicationResponse
     */
    public function amendBenefitApplication(AmendBenefitApplicationRequest $args)
    {
        $result = parent::amendBenefitApplication($args->toArray());
        return new AmendBenefitApplicationResponse($result->toArray());
    }
}
