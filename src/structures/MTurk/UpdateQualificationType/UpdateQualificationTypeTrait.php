<?php

namespace Sunaoka\Aws\Structures\MTurk\UpdateQualificationType;

trait UpdateQualificationTypeTrait
{
    /**
     * @param UpdateQualificationTypeRequest $args
     * @return UpdateQualificationTypeResponse
     */
    public function updateQualificationType(UpdateQualificationTypeRequest $args)
    {
        $result = parent::updateQualificationType($args->toArray());
        return new UpdateQualificationTypeResponse($result->toArray());
    }
}
