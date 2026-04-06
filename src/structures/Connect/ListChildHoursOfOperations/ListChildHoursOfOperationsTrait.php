<?php

namespace Sunaoka\Aws\Structures\Connect\ListChildHoursOfOperations;

trait ListChildHoursOfOperationsTrait
{
    /**
     * @param ListChildHoursOfOperationsRequest $args
     * @return ListChildHoursOfOperationsResponse
     */
    public function listChildHoursOfOperations(ListChildHoursOfOperationsRequest $args)
    {
        $result = parent::listChildHoursOfOperations($args->toArray());
        return new ListChildHoursOfOperationsResponse($result->toArray());
    }
}
