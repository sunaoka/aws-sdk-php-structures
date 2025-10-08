<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplicationVersion;

trait DescribeApplicationVersionTrait
{
    /**
     * @param DescribeApplicationVersionRequest $args
     * @return DescribeApplicationVersionResponse
     */
    public function describeApplicationVersion(DescribeApplicationVersionRequest $args)
    {
        $result = parent::describeApplicationVersion($args->toArray());
        return new DescribeApplicationVersionResponse($result->toArray());
    }
}
