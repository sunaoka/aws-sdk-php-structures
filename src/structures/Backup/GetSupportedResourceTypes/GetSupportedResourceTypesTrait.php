<?php

namespace Sunaoka\Aws\Structures\Backup\GetSupportedResourceTypes;

trait GetSupportedResourceTypesTrait
{
    /**
     * @return GetSupportedResourceTypesResponse
     */
    public function getSupportedResourceTypes()
    {
        $result = parent::getSupportedResourceTypes();
        return new GetSupportedResourceTypesResponse($result->toArray());
    }
}
