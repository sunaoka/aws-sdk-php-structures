<?php

namespace Sunaoka\Aws\Structures\B2bi\ListPartnerships;

trait ListPartnershipsTrait
{
    /**
     * @param ListPartnershipsRequest $args
     * @return ListPartnershipsResponse
     */
    public function listPartnerships(ListPartnershipsRequest $args)
    {
        $result = parent::listPartnerships($args->toArray());
        return new ListPartnershipsResponse($result->toArray());
    }
}
