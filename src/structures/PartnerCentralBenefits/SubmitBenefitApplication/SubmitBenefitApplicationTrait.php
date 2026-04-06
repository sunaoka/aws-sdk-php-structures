<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\SubmitBenefitApplication;

trait SubmitBenefitApplicationTrait
{
    /**
     * @param SubmitBenefitApplicationRequest $args
     * @return SubmitBenefitApplicationResponse
     */
    public function submitBenefitApplication(SubmitBenefitApplicationRequest $args)
    {
        $result = parent::submitBenefitApplication($args->toArray());
        return new SubmitBenefitApplicationResponse($result->toArray());
    }
}
