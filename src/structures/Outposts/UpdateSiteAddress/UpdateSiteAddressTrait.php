<?php

namespace Sunaoka\Aws\Structures\Outposts\UpdateSiteAddress;

trait UpdateSiteAddressTrait
{
    /**
     * @param UpdateSiteAddressRequest $args
     * @return UpdateSiteAddressResponse
     */
    public function updateSiteAddress(UpdateSiteAddressRequest $args)
    {
        $result = parent::updateSiteAddress($args->toArray());
        return new UpdateSiteAddressResponse($result->toArray());
    }
}
