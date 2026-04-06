<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\ListPartners;

trait ListPartnersTrait
{
    /**
     * @param ListPartnersRequest $args
     * @return ListPartnersResponse
     */
    public function listPartners(ListPartnersRequest $args)
    {
        $result = parent::listPartners($args->toArray());
        return new ListPartnersResponse($result->toArray());
    }
}
