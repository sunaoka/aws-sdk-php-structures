<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\ListSubjects;

trait ListSubjectsTrait
{
    /**
     * @param ListSubjectsRequest $args
     * @return ListSubjectsResponse
     */
    public function listSubjects(ListSubjectsRequest $args)
    {
        $result = parent::listSubjects($args->toArray());
        return new ListSubjectsResponse($result->toArray());
    }
}
