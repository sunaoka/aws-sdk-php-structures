<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\ListBenefitAllocations;

trait ListBenefitAllocationsTrait
{
    /**
     * @param ListBenefitAllocationsRequest $args
     * @return ListBenefitAllocationsResponse
     */
    public function listBenefitAllocations(ListBenefitAllocationsRequest $args)
    {
        $result = parent::listBenefitAllocations($args->toArray());
        return new ListBenefitAllocationsResponse($result->toArray());
    }
}
