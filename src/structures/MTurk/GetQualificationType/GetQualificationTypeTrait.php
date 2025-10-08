<?php

namespace Sunaoka\Aws\Structures\MTurk\GetQualificationType;

trait GetQualificationTypeTrait
{
    /**
     * @param GetQualificationTypeRequest $args
     * @return GetQualificationTypeResponse
     */
    public function getQualificationType(GetQualificationTypeRequest $args)
    {
        $result = parent::getQualificationType($args->toArray());
        return new GetQualificationTypeResponse($result->toArray());
    }
}
