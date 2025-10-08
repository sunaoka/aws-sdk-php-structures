<?php

namespace Sunaoka\Aws\Structures\MediaStoreData\DescribeObject;

trait DescribeObjectTrait
{
    /**
     * @param DescribeObjectRequest $args
     * @return DescribeObjectResponse
     */
    public function describeObject(DescribeObjectRequest $args)
    {
        $result = parent::describeObject($args->toArray());
        return new DescribeObjectResponse($result->toArray());
    }
}
