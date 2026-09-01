<?php

namespace Sunaoka\Aws\Structures\SesV2\UpdateConfigurationSet;

trait UpdateConfigurationSetTrait
{
    /**
     * @param UpdateConfigurationSetRequest $args
     * @return UpdateConfigurationSetResponse
     */
    public function updateConfigurationSet(UpdateConfigurationSetRequest $args)
    {
        $result = parent::updateConfigurationSet($args->toArray());
        return new UpdateConfigurationSetResponse($result->toArray());
    }
}
