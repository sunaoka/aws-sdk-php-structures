<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListAudienceExportJobs;

trait ListAudienceExportJobsTrait
{
    /**
     * @param ListAudienceExportJobsRequest $args
     * @return ListAudienceExportJobsResponse
     */
    public function listAudienceExportJobs(ListAudienceExportJobsRequest $args)
    {
        $result = parent::listAudienceExportJobs($args->toArray());
        return new ListAudienceExportJobsResponse($result->toArray());
    }
}
