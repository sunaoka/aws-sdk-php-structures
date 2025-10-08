<?php

namespace Sunaoka\Aws\Structures\Connect\CreateHoursOfOperation;

trait CreateHoursOfOperationTrait
{
    /**
     * @param CreateHoursOfOperationRequest $args
     * @return CreateHoursOfOperationResponse
     */
    public function createHoursOfOperation(CreateHoursOfOperationRequest $args)
    {
        $result = parent::createHoursOfOperation($args->toArray());
        return new CreateHoursOfOperationResponse($result->toArray());
    }
}
