<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeMailboxExportJob;

trait DescribeMailboxExportJobTrait
{
    /**
     * @param DescribeMailboxExportJobRequest $args
     * @return DescribeMailboxExportJobResponse
     */
    public function describeMailboxExportJob(DescribeMailboxExportJobRequest $args)
    {
        $result = parent::describeMailboxExportJob($args->toArray());
        return new DescribeMailboxExportJobResponse($result->toArray());
    }
}
