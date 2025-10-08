<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseConversionTasks;

trait ListLicenseConversionTasksTrait
{
    /**
     * @param ListLicenseConversionTasksRequest $args
     * @return ListLicenseConversionTasksResponse
     */
    public function listLicenseConversionTasks(ListLicenseConversionTasksRequest $args)
    {
        $result = parent::listLicenseConversionTasks($args->toArray());
        return new ListLicenseConversionTasksResponse($result->toArray());
    }
}
