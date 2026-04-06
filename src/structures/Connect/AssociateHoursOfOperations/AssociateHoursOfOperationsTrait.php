<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateHoursOfOperations;

trait AssociateHoursOfOperationsTrait
{
    /**
     * @param AssociateHoursOfOperationsRequest $args
     * @return void
     */
    public function associateHoursOfOperations(AssociateHoursOfOperationsRequest $args)
    {
        parent::associateHoursOfOperations($args->toArray());
    }
}
