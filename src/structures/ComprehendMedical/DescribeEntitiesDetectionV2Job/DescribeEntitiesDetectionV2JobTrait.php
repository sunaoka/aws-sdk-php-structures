<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\DescribeEntitiesDetectionV2Job;

trait DescribeEntitiesDetectionV2JobTrait
{
    /**
     * @param DescribeEntitiesDetectionV2JobRequest $args
     * @return DescribeEntitiesDetectionV2JobResponse
     */
    public function describeEntitiesDetectionV2Job(DescribeEntitiesDetectionV2JobRequest $args)
    {
        $result = parent::describeEntitiesDetectionV2Job($args->toArray());
        return new DescribeEntitiesDetectionV2JobResponse($result->toArray());
    }
}
