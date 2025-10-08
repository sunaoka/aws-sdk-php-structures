<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListWebExperiences;

trait ListWebExperiencesTrait
{
    /**
     * @param ListWebExperiencesRequest $args
     * @return ListWebExperiencesResponse
     */
    public function listWebExperiences(ListWebExperiencesRequest $args)
    {
        $result = parent::listWebExperiences($args->toArray());
        return new ListWebExperiencesResponse($result->toArray());
    }
}
