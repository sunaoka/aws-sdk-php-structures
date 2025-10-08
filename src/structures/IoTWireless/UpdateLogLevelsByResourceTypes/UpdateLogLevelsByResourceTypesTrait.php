<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateLogLevelsByResourceTypes;

trait UpdateLogLevelsByResourceTypesTrait
{
    /**
     * @param UpdateLogLevelsByResourceTypesRequest $args
     * @return UpdateLogLevelsByResourceTypesResponse
     */
    public function updateLogLevelsByResourceTypes(UpdateLogLevelsByResourceTypesRequest $args)
    {
        $result = parent::updateLogLevelsByResourceTypes($args->toArray());
        return new UpdateLogLevelsByResourceTypesResponse($result->toArray());
    }
}
