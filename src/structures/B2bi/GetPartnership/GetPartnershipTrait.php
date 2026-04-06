<?php

namespace Sunaoka\Aws\Structures\B2bi\GetPartnership;

trait GetPartnershipTrait
{
    /**
     * @param GetPartnershipRequest $args
     * @return GetPartnershipResponse
     */
    public function getPartnership(GetPartnershipRequest $args)
    {
        $result = parent::getPartnership($args->toArray());
        return new GetPartnershipResponse($result->toArray());
    }
}
