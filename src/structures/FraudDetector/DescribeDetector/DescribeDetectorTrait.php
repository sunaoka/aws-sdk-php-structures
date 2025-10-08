<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeDetector;

trait DescribeDetectorTrait
{
    /**
     * @param DescribeDetectorRequest $args
     * @return DescribeDetectorResponse
     */
    public function describeDetector(DescribeDetectorRequest $args)
    {
        $result = parent::describeDetector($args->toArray());
        return new DescribeDetectorResponse($result->toArray());
    }
}
