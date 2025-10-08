<?php

namespace Sunaoka\Aws\Structures\MTurk\ListQualificationTypes;

trait ListQualificationTypesTrait
{
    /**
     * @param ListQualificationTypesRequest $args
     * @return ListQualificationTypesResponse
     */
    public function listQualificationTypes(ListQualificationTypesRequest $args)
    {
        $result = parent::listQualificationTypes($args->toArray());
        return new ListQualificationTypesResponse($result->toArray());
    }
}
