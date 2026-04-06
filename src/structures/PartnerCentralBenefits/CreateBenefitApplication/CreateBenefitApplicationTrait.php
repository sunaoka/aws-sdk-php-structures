<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\CreateBenefitApplication;

trait CreateBenefitApplicationTrait
{
    /**
     * @param CreateBenefitApplicationRequest $args
     * @return CreateBenefitApplicationResponse
     */
    public function createBenefitApplication(CreateBenefitApplicationRequest $args)
    {
        $result = parent::createBenefitApplication($args->toArray());
        return new CreateBenefitApplicationResponse($result->toArray());
    }
}
