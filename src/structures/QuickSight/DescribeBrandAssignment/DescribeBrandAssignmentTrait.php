<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrandAssignment;

trait DescribeBrandAssignmentTrait
{
    /**
     * @param DescribeBrandAssignmentRequest $args
     * @return DescribeBrandAssignmentResponse
     */
    public function describeBrandAssignment(DescribeBrandAssignmentRequest $args)
    {
        $result = parent::describeBrandAssignment($args->toArray());
        return new DescribeBrandAssignmentResponse($result->toArray());
    }
}
