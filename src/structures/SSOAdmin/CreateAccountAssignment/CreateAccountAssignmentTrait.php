<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreateAccountAssignment;

trait CreateAccountAssignmentTrait
{
    /**
     * @param CreateAccountAssignmentRequest $args
     * @return CreateAccountAssignmentResponse
     */
    public function createAccountAssignment(CreateAccountAssignmentRequest $args)
    {
        $result = parent::createAccountAssignment($args->toArray());
        return new CreateAccountAssignmentResponse($result->toArray());
    }
}
