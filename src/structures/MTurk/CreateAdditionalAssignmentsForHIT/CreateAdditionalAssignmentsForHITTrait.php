<?php

namespace Sunaoka\Aws\Structures\MTurk\CreateAdditionalAssignmentsForHIT;

trait CreateAdditionalAssignmentsForHITTrait
{
    /**
     * @param CreateAdditionalAssignmentsForHITRequest $args
     * @return CreateAdditionalAssignmentsForHITResponse
     */
    public function createAdditionalAssignmentsForHIT(CreateAdditionalAssignmentsForHITRequest $args)
    {
        $result = parent::createAdditionalAssignmentsForHIT($args->toArray());
        return new CreateAdditionalAssignmentsForHITResponse($result->toArray());
    }
}
