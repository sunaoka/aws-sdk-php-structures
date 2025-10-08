<?php

namespace Sunaoka\Aws\Structures\MTurk\DeleteQualificationType;

trait DeleteQualificationTypeTrait
{
    /**
     * @param DeleteQualificationTypeRequest $args
     * @return DeleteQualificationTypeResponse
     */
    public function deleteQualificationType(DeleteQualificationTypeRequest $args)
    {
        $result = parent::deleteQualificationType($args->toArray());
        return new DeleteQualificationTypeResponse($result->toArray());
    }
}
