<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeCopyJob;

trait DescribeCopyJobTrait
{
    /**
     * @param DescribeCopyJobRequest $args
     * @return DescribeCopyJobResponse
     */
    public function describeCopyJob(DescribeCopyJobRequest $args)
    {
        $result = parent::describeCopyJob($args->toArray());
        return new DescribeCopyJobResponse($result->toArray());
    }
}
