<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\RecallBenefitApplication;

trait RecallBenefitApplicationTrait
{
    /**
     * @param RecallBenefitApplicationRequest $args
     * @return RecallBenefitApplicationResponse
     */
    public function recallBenefitApplication(RecallBenefitApplicationRequest $args)
    {
        $result = parent::recallBenefitApplication($args->toArray());
        return new RecallBenefitApplicationResponse($result->toArray());
    }
}
