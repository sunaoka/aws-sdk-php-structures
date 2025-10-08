<?php

namespace Sunaoka\Aws\Structures\Outposts\GetSiteAddress;

trait GetSiteAddressTrait
{
    /**
     * @param GetSiteAddressRequest $args
     * @return GetSiteAddressResponse
     */
    public function getSiteAddress(GetSiteAddressRequest $args)
    {
        $result = parent::getSiteAddress($args->toArray());
        return new GetSiteAddressResponse($result->toArray());
    }
}
