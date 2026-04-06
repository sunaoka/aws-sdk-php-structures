<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeOperatingSystems;

trait DescribeOperatingSystemsTrait
{
    /**
     * @return DescribeOperatingSystemsResponse
     */
    public function describeOperatingSystems()
    {
        $result = parent::describeOperatingSystems();
        return new DescribeOperatingSystemsResponse($result->toArray());
    }
}
