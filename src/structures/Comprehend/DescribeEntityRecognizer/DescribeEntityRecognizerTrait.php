<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeEntityRecognizer;

trait DescribeEntityRecognizerTrait
{
    /**
     * @param DescribeEntityRecognizerRequest $args
     * @return DescribeEntityRecognizerResponse
     */
    public function describeEntityRecognizer(DescribeEntityRecognizerRequest $args)
    {
        $result = parent::describeEntityRecognizer($args->toArray());
        return new DescribeEntityRecognizerResponse($result->toArray());
    }
}
