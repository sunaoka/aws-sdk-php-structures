<?php

namespace Sunaoka\Aws\Structures\LicenseManager\UpdateLicenseSpecificationsForResource;

trait UpdateLicenseSpecificationsForResourceTrait
{
    /**
     * @param UpdateLicenseSpecificationsForResourceRequest $args
     * @return UpdateLicenseSpecificationsForResourceResponse
     */
    public function updateLicenseSpecificationsForResource(UpdateLicenseSpecificationsForResourceRequest $args)
    {
        $result = parent::updateLicenseSpecificationsForResource($args->toArray());
        return new UpdateLicenseSpecificationsForResourceResponse($result->toArray());
    }
}
