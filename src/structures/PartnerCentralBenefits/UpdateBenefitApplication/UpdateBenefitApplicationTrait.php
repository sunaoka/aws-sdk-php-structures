<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\UpdateBenefitApplication;

trait UpdateBenefitApplicationTrait
{
    /**
     * @param UpdateBenefitApplicationRequest $args
     * @return UpdateBenefitApplicationResponse
     */
    public function updateBenefitApplication(UpdateBenefitApplicationRequest $args)
    {
        $result = parent::updateBenefitApplication($args->toArray());
        return new UpdateBenefitApplicationResponse($result->toArray());
    }
}
