<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetNamespaceDeletionStatus;

trait GetNamespaceDeletionStatusTrait
{
    /**
     * @param GetNamespaceDeletionStatusRequest $args
     * @return GetNamespaceDeletionStatusResponse
     */
    public function getNamespaceDeletionStatus(GetNamespaceDeletionStatusRequest $args)
    {
        $result = parent::getNamespaceDeletionStatus($args->toArray());
        return new GetNamespaceDeletionStatusResponse($result->toArray());
    }
}
