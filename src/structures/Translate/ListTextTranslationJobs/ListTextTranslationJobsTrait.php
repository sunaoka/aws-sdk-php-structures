<?php

namespace Sunaoka\Aws\Structures\Translate\ListTextTranslationJobs;

trait ListTextTranslationJobsTrait
{
    /**
     * @param ListTextTranslationJobsRequest $args
     * @return ListTextTranslationJobsResponse
     */
    public function listTextTranslationJobs(ListTextTranslationJobsRequest $args)
    {
        $result = parent::listTextTranslationJobs($args->toArray());
        return new ListTextTranslationJobsResponse($result->toArray());
    }
}
