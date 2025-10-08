<?php

namespace Sunaoka\Aws\Structures\DataPipeline\ReportTaskProgress;

trait ReportTaskProgressTrait
{
    /**
     * @param ReportTaskProgressRequest $args
     * @return ReportTaskProgressResponse
     */
    public function reportTaskProgress(ReportTaskProgressRequest $args)
    {
        $result = parent::reportTaskProgress($args->toArray());
        return new ReportTaskProgressResponse($result->toArray());
    }
}
