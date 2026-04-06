<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\DisassociateBenefitApplicationResource;

trait DisassociateBenefitApplicationResourceTrait
{
    /**
     * @param DisassociateBenefitApplicationResourceRequest $args
     * @return DisassociateBenefitApplicationResourceResponse
     */
    public function disassociateBenefitApplicationResource(DisassociateBenefitApplicationResourceRequest $args)
    {
        $result = parent::disassociateBenefitApplicationResource($args->toArray());
        return new DisassociateBenefitApplicationResourceResponse($result->toArray());
    }
}
