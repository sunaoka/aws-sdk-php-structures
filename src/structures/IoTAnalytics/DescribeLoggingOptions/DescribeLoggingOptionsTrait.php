<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeLoggingOptions;

trait DescribeLoggingOptionsTrait
{
    /**
     * @param DescribeLoggingOptionsRequest $args
     * @return DescribeLoggingOptionsResponse
     */
    public function describeLoggingOptions(DescribeLoggingOptionsRequest $args)
    {
        $result = parent::describeLoggingOptions($args->toArray());
        return new DescribeLoggingOptionsResponse($result->toArray());
    }
}
