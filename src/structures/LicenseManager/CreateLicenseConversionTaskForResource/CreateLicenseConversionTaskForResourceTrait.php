<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicenseConversionTaskForResource;

trait CreateLicenseConversionTaskForResourceTrait
{
    /**
     * @param CreateLicenseConversionTaskForResourceRequest $args
     * @return CreateLicenseConversionTaskForResourceResponse
     */
    public function createLicenseConversionTaskForResource(CreateLicenseConversionTaskForResourceRequest $args)
    {
        $result = parent::createLicenseConversionTaskForResource($args->toArray());
        return new CreateLicenseConversionTaskForResourceResponse($result->toArray());
    }
}
