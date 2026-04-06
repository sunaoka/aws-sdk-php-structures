<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateHoursOfOperationOverride;

trait UpdateHoursOfOperationOverrideTrait
{
    /**
     * @param UpdateHoursOfOperationOverrideRequest $args
     * @return void
     */
    public function updateHoursOfOperationOverride(UpdateHoursOfOperationOverrideRequest $args)
    {
        parent::updateHoursOfOperationOverride($args->toArray());
    }
}
