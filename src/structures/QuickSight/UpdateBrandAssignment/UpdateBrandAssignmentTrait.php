<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateBrandAssignment;

trait UpdateBrandAssignmentTrait
{
    /**
     * @param UpdateBrandAssignmentRequest $args
     * @return UpdateBrandAssignmentResponse
     */
    public function updateBrandAssignment(UpdateBrandAssignmentRequest $args)
    {
        $result = parent::updateBrandAssignment($args->toArray());
        return new UpdateBrandAssignmentResponse($result->toArray());
    }
}
