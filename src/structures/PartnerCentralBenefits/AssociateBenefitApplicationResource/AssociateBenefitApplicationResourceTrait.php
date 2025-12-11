<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\AssociateBenefitApplicationResource;

trait AssociateBenefitApplicationResourceTrait
{
    /**
     * @param AssociateBenefitApplicationResourceRequest $args
     * @return AssociateBenefitApplicationResourceResponse
     */
    public function associateBenefitApplicationResource(AssociateBenefitApplicationResourceRequest $args)
    {
        $result = parent::associateBenefitApplicationResource($args->toArray());
        return new AssociateBenefitApplicationResourceResponse($result->toArray());
    }
}
