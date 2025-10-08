<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeAppVersion;

trait DescribeAppVersionTrait
{
    /**
     * @param DescribeAppVersionRequest $args
     * @return DescribeAppVersionResponse
     */
    public function describeAppVersion(DescribeAppVersionRequest $args)
    {
        $result = parent::describeAppVersion($args->toArray());
        return new DescribeAppVersionResponse($result->toArray());
    }
}
