<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateHoursOfOperations;

trait DisassociateHoursOfOperationsTrait
{
    /**
     * @param DisassociateHoursOfOperationsRequest $args
     * @return void
     */
    public function disassociateHoursOfOperations(DisassociateHoursOfOperationsRequest $args)
    {
        parent::disassociateHoursOfOperations($args->toArray());
    }
}
