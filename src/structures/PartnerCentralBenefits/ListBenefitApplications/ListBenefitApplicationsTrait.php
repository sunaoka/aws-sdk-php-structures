<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\ListBenefitApplications;

trait ListBenefitApplicationsTrait
{
    /**
     * @param ListBenefitApplicationsRequest $args
     * @return ListBenefitApplicationsResponse
     */
    public function listBenefitApplications(ListBenefitApplicationsRequest $args)
    {
        $result = parent::listBenefitApplications($args->toArray());
        return new ListBenefitApplicationsResponse($result->toArray());
    }
}
