<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseSpecificationsForResource;

trait ListLicenseSpecificationsForResourceTrait
{
    /**
     * @param ListLicenseSpecificationsForResourceRequest $args
     * @return ListLicenseSpecificationsForResourceResponse
     */
    public function listLicenseSpecificationsForResource(ListLicenseSpecificationsForResourceRequest $args)
    {
        $result = parent::listLicenseSpecificationsForResource($args->toArray());
        return new ListLicenseSpecificationsForResourceResponse($result->toArray());
    }
}
