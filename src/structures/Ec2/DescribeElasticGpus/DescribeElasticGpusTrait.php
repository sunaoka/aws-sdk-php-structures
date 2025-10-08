<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeElasticGpus;

trait DescribeElasticGpusTrait
{
    /**
     * @param DescribeElasticGpusRequest $args
     * @return DescribeElasticGpusResponse
     */
    public function describeElasticGpus(DescribeElasticGpusRequest $args)
    {
        $result = parent::describeElasticGpus($args->toArray());
        return new DescribeElasticGpusResponse($result->toArray());
    }
}
