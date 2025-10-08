<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\GetSubject;

trait GetSubjectTrait
{
    /**
     * @param GetSubjectRequest $args
     * @return GetSubjectResponse
     */
    public function getSubject(GetSubjectRequest $args)
    {
        $result = parent::getSubject($args->toArray());
        return new GetSubjectResponse($result->toArray());
    }
}
