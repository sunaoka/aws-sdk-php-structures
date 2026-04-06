<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DeleteApplicationAssignment;

trait DeleteApplicationAssignmentTrait
{
    /**
     * @param DeleteApplicationAssignmentRequest $args
     * @return DeleteApplicationAssignmentResponse
     */
    public function deleteApplicationAssignment(DeleteApplicationAssignmentRequest $args)
    {
        $result = parent::deleteApplicationAssignment($args->toArray());
        return new DeleteApplicationAssignmentResponse($result->toArray());
    }
}
