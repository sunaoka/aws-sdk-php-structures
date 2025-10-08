<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseConversionTask;

trait GetLicenseConversionTaskTrait
{
    /**
     * @param GetLicenseConversionTaskRequest $args
     * @return GetLicenseConversionTaskResponse
     */
    public function getLicenseConversionTask(GetLicenseConversionTaskRequest $args)
    {
        $result = parent::getLicenseConversionTask($args->toArray());
        return new GetLicenseConversionTaskResponse($result->toArray());
    }
}
