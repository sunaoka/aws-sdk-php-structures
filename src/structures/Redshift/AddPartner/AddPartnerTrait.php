<?php

namespace Sunaoka\Aws\Structures\Redshift\AddPartner;

trait AddPartnerTrait
{
    /**
     * @param AddPartnerRequest $args
     * @return AddPartnerResponse
     */
    public function addPartner(AddPartnerRequest $args)
    {
        $result = parent::addPartner($args->toArray());
        return new AddPartnerResponse($result->toArray());
    }
}
