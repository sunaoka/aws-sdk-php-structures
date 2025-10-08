<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdatePartnership;

trait UpdatePartnershipTrait
{
    /**
     * @param UpdatePartnershipRequest $args
     * @return UpdatePartnershipResponse
     */
    public function updatePartnership(UpdatePartnershipRequest $args)
    {
        $result = parent::updatePartnership($args->toArray());
        return new UpdatePartnershipResponse($result->toArray());
    }
}
