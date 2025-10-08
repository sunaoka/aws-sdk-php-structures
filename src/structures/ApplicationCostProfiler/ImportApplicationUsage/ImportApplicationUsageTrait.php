<?php

namespace Sunaoka\Aws\Structures\ApplicationCostProfiler\ImportApplicationUsage;

trait ImportApplicationUsageTrait
{
    /**
     * @param ImportApplicationUsageRequest $args
     * @return ImportApplicationUsageResponse
     */
    public function importApplicationUsage(ImportApplicationUsageRequest $args)
    {
        $result = parent::importApplicationUsage($args->toArray());
        return new ImportApplicationUsageResponse($result->toArray());
    }
}
