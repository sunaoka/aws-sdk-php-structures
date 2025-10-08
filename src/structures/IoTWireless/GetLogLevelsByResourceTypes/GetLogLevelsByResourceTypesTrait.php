<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetLogLevelsByResourceTypes;

trait GetLogLevelsByResourceTypesTrait
{
    /**
     * @param GetLogLevelsByResourceTypesRequest $args
     * @return GetLogLevelsByResourceTypesResponse
     */
    public function getLogLevelsByResourceTypes(GetLogLevelsByResourceTypesRequest $args)
    {
        $result = parent::getLogLevelsByResourceTypes($args->toArray());
        return new GetLogLevelsByResourceTypesResponse($result->toArray());
    }
}
