<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeIndexFields;

trait DescribeIndexFieldsTrait
{
    /**
     * @param DescribeIndexFieldsRequest $args
     * @return DescribeIndexFieldsResponse
     */
    public function describeIndexFields(DescribeIndexFieldsRequest $args)
    {
        $result = parent::describeIndexFields($args->toArray());
        return new DescribeIndexFieldsResponse($result->toArray());
    }
}
