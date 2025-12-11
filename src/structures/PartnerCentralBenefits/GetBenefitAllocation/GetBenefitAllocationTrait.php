<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\GetBenefitAllocation;

trait GetBenefitAllocationTrait
{
    /**
     * @param GetBenefitAllocationRequest $args
     * @return GetBenefitAllocationResponse
     */
    public function getBenefitAllocation(GetBenefitAllocationRequest $args)
    {
        $result = parent::getBenefitAllocation($args->toArray());
        return new GetBenefitAllocationResponse($result->toArray());
    }
}
