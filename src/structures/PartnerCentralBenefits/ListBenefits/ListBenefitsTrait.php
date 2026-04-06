<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\ListBenefits;

trait ListBenefitsTrait
{
    /**
     * @param ListBenefitsRequest $args
     * @return ListBenefitsResponse
     */
    public function listBenefits(ListBenefitsRequest $args)
    {
        $result = parent::listBenefits($args->toArray());
        return new ListBenefitsResponse($result->toArray());
    }
}
