<?php

namespace Sunaoka\Aws\Structures\Outposts\GetOutpostBillingInformation;

trait GetOutpostBillingInformationTrait
{
    /**
     * @param GetOutpostBillingInformationRequest $args
     * @return GetOutpostBillingInformationResponse
     */
    public function getOutpostBillingInformation(GetOutpostBillingInformationRequest $args)
    {
        $result = parent::getOutpostBillingInformation($args->toArray());
        return new GetOutpostBillingInformationResponse($result->toArray());
    }
}
