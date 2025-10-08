<?php

namespace Sunaoka\Aws\Structures\kendra\ListExperiences;

trait ListExperiencesTrait
{
    /**
     * @param ListExperiencesRequest $args
     * @return ListExperiencesResponse
     */
    public function listExperiences(ListExperiencesRequest $args)
    {
        $result = parent::listExperiences($args->toArray());
        return new ListExperiencesResponse($result->toArray());
    }
}
