<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\UpdateZonalAutoshiftConfiguration;

trait UpdateZonalAutoshiftConfigurationTrait
{
    /**
     * @param UpdateZonalAutoshiftConfigurationRequest $args
     * @return UpdateZonalAutoshiftConfigurationResponse
     */
    public function updateZonalAutoshiftConfiguration(UpdateZonalAutoshiftConfigurationRequest $args)
    {
        $result = parent::updateZonalAutoshiftConfiguration($args->toArray());
        return new UpdateZonalAutoshiftConfigurationResponse($result->toArray());
    }
}
