<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeLoggingOptions;

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
