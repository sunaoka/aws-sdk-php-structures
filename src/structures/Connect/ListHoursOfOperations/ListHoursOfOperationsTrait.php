<?php

namespace Sunaoka\Aws\Structures\Connect\ListHoursOfOperations;

trait ListHoursOfOperationsTrait
{
    /**
     * @param ListHoursOfOperationsRequest $args
     * @return ListHoursOfOperationsResponse
     */
    public function listHoursOfOperations(ListHoursOfOperationsRequest $args)
    {
        $result = parent::listHoursOfOperations($args->toArray());
        return new ListHoursOfOperationsResponse($result->toArray());
    }
}
