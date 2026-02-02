<?php

namespace Sunaoka\Aws\Structures\Artifact\ListReportVersions;

trait ListReportVersionsTrait
{
    /**
     * @param ListReportVersionsRequest $args
     * @return ListReportVersionsResponse
     */
    public function listReportVersions(ListReportVersionsRequest $args)
    {
        $result = parent::listReportVersions($args->toArray());
        return new ListReportVersionsResponse($result->toArray());
    }
}
