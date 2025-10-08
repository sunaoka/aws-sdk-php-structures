<?php

namespace Sunaoka\Aws\Structures\MTurk\CreateQualificationType;

trait CreateQualificationTypeTrait
{
    /**
     * @param CreateQualificationTypeRequest $args
     * @return CreateQualificationTypeResponse
     */
    public function createQualificationType(CreateQualificationTypeRequest $args)
    {
        $result = parent::createQualificationType($args->toArray());
        return new CreateQualificationTypeResponse($result->toArray());
    }
}
