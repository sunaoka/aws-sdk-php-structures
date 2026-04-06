<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreateApplicationAssignment;

trait CreateApplicationAssignmentTrait
{
    /**
     * @param CreateApplicationAssignmentRequest $args
     * @return CreateApplicationAssignmentResponse
     */
    public function createApplicationAssignment(CreateApplicationAssignmentRequest $args)
    {
        $result = parent::createApplicationAssignment($args->toArray());
        return new CreateApplicationAssignmentResponse($result->toArray());
    }
}
