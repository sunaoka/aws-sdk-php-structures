<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeApplicationProvider;

trait DescribeApplicationProviderTrait
{
    /**
     * @param DescribeApplicationProviderRequest $args
     * @return DescribeApplicationProviderResponse
     */
    public function describeApplicationProvider(DescribeApplicationProviderRequest $args)
    {
        $result = parent::describeApplicationProvider($args->toArray());
        return new DescribeApplicationProviderResponse($result->toArray());
    }
}
