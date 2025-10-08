<?php

namespace Sunaoka\Aws\Structures\B2bi\CreatePartnership;

trait CreatePartnershipTrait
{
    /**
     * @param CreatePartnershipRequest $args
     * @return CreatePartnershipResponse
     */
    public function createPartnership(CreatePartnershipRequest $args)
    {
        $result = parent::createPartnership($args->toArray());
        return new CreatePartnershipResponse($result->toArray());
    }
}
