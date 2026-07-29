<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeEnrichmentJob;

trait DescribeEnrichmentJobTrait
{
    /**
     * @param DescribeEnrichmentJobRequest $args
     * @return DescribeEnrichmentJobResponse
     */
    public function describeEnrichmentJob(DescribeEnrichmentJobRequest $args)
    {
        $result = parent::describeEnrichmentJob($args->toArray());
        return new DescribeEnrichmentJobResponse($result->toArray());
    }
}
