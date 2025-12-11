<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeScanJob;

trait DescribeScanJobTrait
{
    /**
     * @param DescribeScanJobRequest $args
     * @return DescribeScanJobResponse
     */
    public function describeScanJob(DescribeScanJobRequest $args)
    {
        $result = parent::describeScanJob($args->toArray());
        return new DescribeScanJobResponse($result->toArray());
    }
}
