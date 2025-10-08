<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteHoursOfOperation;

trait DeleteHoursOfOperationTrait
{
    /**
     * @param DeleteHoursOfOperationRequest $args
     * @return void
     */
    public function deleteHoursOfOperation(DeleteHoursOfOperationRequest $args)
    {
        parent::deleteHoursOfOperation($args->toArray());
    }
}
