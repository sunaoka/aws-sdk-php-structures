<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeTagOption;

trait DescribeTagOptionTrait
{
    /**
     * @param DescribeTagOptionRequest $args
     * @return DescribeTagOptionResponse
     */
    public function describeTagOption(DescribeTagOptionRequest $args)
    {
        $result = parent::describeTagOption($args->toArray());
        return new DescribeTagOptionResponse($result->toArray());
    }
}
