<?php

namespace Sunaoka\Aws\Structures\BackupSearch\GetSearchJob;

trait GetSearchJobTrait
{
    /**
     * @param GetSearchJobRequest $args
     * @return GetSearchJobResponse
     */
    public function getSearchJob(GetSearchJobRequest $args)
    {
        $result = parent::getSearchJob($args->toArray());
        return new GetSearchJobResponse($result->toArray());
    }
}
