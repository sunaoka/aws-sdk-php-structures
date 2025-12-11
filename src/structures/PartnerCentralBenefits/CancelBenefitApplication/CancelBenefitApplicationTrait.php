<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\CancelBenefitApplication;

trait CancelBenefitApplicationTrait
{
    /**
     * @param CancelBenefitApplicationRequest $args
     * @return CancelBenefitApplicationResponse
     */
    public function cancelBenefitApplication(CancelBenefitApplicationRequest $args)
    {
        $result = parent::cancelBenefitApplication($args->toArray());
        return new CancelBenefitApplicationResponse($result->toArray());
    }
}
