<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\CreatePartner;

trait CreatePartnerTrait
{
    /**
     * @param CreatePartnerRequest $args
     * @return CreatePartnerResponse
     */
    public function createPartner(CreatePartnerRequest $args)
    {
        $result = parent::createPartner($args->toArray());
        return new CreatePartnerResponse($result->toArray());
    }
}
