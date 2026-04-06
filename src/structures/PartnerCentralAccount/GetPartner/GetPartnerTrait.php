<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\GetPartner;

trait GetPartnerTrait
{
    /**
     * @param GetPartnerRequest $args
     * @return GetPartnerResponse
     */
    public function getPartner(GetPartnerRequest $args)
    {
        $result = parent::getPartner($args->toArray());
        return new GetPartnerResponse($result->toArray());
    }
}
