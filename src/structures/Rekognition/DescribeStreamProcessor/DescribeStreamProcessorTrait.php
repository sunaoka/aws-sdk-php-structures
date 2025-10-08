<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeStreamProcessor;

trait DescribeStreamProcessorTrait
{
    /**
     * @param DescribeStreamProcessorRequest $args
     * @return DescribeStreamProcessorResponse
     */
    public function describeStreamProcessor(DescribeStreamProcessorRequest $args)
    {
        $result = parent::describeStreamProcessor($args->toArray());
        return new DescribeStreamProcessorResponse($result->toArray());
    }
}
