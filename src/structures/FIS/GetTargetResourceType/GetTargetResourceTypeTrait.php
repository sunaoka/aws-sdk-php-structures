<?php

namespace Sunaoka\Aws\Structures\FIS\GetTargetResourceType;

trait GetTargetResourceTypeTrait
{
    /**
     * @param GetTargetResourceTypeRequest $args
     * @return GetTargetResourceTypeResponse
     */
    public function getTargetResourceType(GetTargetResourceTypeRequest $args)
    {
        $result = parent::getTargetResourceType($args->toArray());
        return new GetTargetResourceTypeResponse($result->toArray());
    }
}
