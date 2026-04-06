<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteBrandAssignment;

trait DeleteBrandAssignmentTrait
{
    /**
     * @param DeleteBrandAssignmentRequest $args
     * @return DeleteBrandAssignmentResponse
     */
    public function deleteBrandAssignment(DeleteBrandAssignmentRequest $args)
    {
        $result = parent::deleteBrandAssignment($args->toArray());
        return new DeleteBrandAssignmentResponse($result->toArray());
    }
}
