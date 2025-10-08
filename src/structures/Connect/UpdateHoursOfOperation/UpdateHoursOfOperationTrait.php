<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateHoursOfOperation;

trait UpdateHoursOfOperationTrait
{
    /**
     * @param UpdateHoursOfOperationRequest $args
     * @return void
     */
    public function updateHoursOfOperation(UpdateHoursOfOperationRequest $args)
    {
        parent::updateHoursOfOperation($args->toArray());
    }
}
