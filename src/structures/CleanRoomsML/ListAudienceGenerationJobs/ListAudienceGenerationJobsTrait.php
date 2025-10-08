<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListAudienceGenerationJobs;

trait ListAudienceGenerationJobsTrait
{
    /**
     * @param ListAudienceGenerationJobsRequest $args
     * @return ListAudienceGenerationJobsResponse
     */
    public function listAudienceGenerationJobs(ListAudienceGenerationJobsRequest $args)
    {
        $result = parent::listAudienceGenerationJobs($args->toArray());
        return new ListAudienceGenerationJobsResponse($result->toArray());
    }
}
