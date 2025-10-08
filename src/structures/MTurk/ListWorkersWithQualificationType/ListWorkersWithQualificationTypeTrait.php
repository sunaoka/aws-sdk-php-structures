<?php

namespace Sunaoka\Aws\Structures\MTurk\ListWorkersWithQualificationType;

trait ListWorkersWithQualificationTypeTrait
{
    /**
     * @param ListWorkersWithQualificationTypeRequest $args
     * @return ListWorkersWithQualificationTypeResponse
     */
    public function listWorkersWithQualificationType(ListWorkersWithQualificationTypeRequest $args)
    {
        $result = parent::listWorkersWithQualificationType($args->toArray());
        return new ListWorkersWithQualificationTypeResponse($result->toArray());
    }
}
