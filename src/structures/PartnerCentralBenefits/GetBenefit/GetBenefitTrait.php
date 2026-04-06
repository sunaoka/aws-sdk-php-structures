<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\GetBenefit;

trait GetBenefitTrait
{
    /**
     * @param GetBenefitRequest $args
     * @return GetBenefitResponse
     */
    public function getBenefit(GetBenefitRequest $args)
    {
        $result = parent::getBenefit($args->toArray());
        return new GetBenefitResponse($result->toArray());
    }
}
