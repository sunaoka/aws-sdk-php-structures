<?php

namespace Sunaoka\Aws\Structures\MTurk\ListAssignmentsForHIT;

trait ListAssignmentsForHITTrait
{
    /**
     * @param ListAssignmentsForHITRequest $args
     * @return ListAssignmentsForHITResponse
     */
    public function listAssignmentsForHIT(ListAssignmentsForHITRequest $args)
    {
        $result = parent::listAssignmentsForHIT($args->toArray());
        return new ListAssignmentsForHITResponse($result->toArray());
    }
}
