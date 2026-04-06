<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeSecurityHubV2;

trait DescribeSecurityHubV2Trait
{
    /**
     * @param DescribeSecurityHubV2Request $args
     * @return DescribeSecurityHubV2Response
     */
    public function describeSecurityHubV2(DescribeSecurityHubV2Request $args)
    {
        $result = parent::describeSecurityHubV2($args->toArray());
        return new DescribeSecurityHubV2Response($result->toArray());
    }
}
