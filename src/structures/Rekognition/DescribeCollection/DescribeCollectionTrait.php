<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeCollection;

trait DescribeCollectionTrait
{
    /**
     * @param DescribeCollectionRequest $args
     * @return DescribeCollectionResponse
     */
    public function describeCollection(DescribeCollectionRequest $args)
    {
        $result = parent::describeCollection($args->toArray());
        return new DescribeCollectionResponse($result->toArray());
    }
}
