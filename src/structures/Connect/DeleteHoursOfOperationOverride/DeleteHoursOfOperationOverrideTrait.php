<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteHoursOfOperationOverride;

trait DeleteHoursOfOperationOverrideTrait
{
    /**
     * @param DeleteHoursOfOperationOverrideRequest $args
     * @return void
     */
    public function deleteHoursOfOperationOverride(DeleteHoursOfOperationOverrideRequest $args)
    {
        parent::deleteHoursOfOperationOverride($args->toArray());
    }
}
