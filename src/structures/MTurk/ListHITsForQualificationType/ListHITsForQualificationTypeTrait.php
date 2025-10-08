<?php

namespace Sunaoka\Aws\Structures\MTurk\ListHITsForQualificationType;

trait ListHITsForQualificationTypeTrait
{
    /**
     * @param ListHITsForQualificationTypeRequest $args
     * @return ListHITsForQualificationTypeResponse
     */
    public function listHITsForQualificationType(ListHITsForQualificationTypeRequest $args)
    {
        $result = parent::listHITsForQualificationType($args->toArray());
        return new ListHITsForQualificationTypeResponse($result->toArray());
    }
}
