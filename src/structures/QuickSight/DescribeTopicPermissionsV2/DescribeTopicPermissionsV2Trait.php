<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopicPermissionsV2;

trait DescribeTopicPermissionsV2Trait
{
    /**
     * @param DescribeTopicPermissionsV2Request $args
     * @return DescribeTopicPermissionsV2Response
     */
    public function describeTopicPermissionsV2(DescribeTopicPermissionsV2Request $args)
    {
        $result = parent::describeTopicPermissionsV2($args->toArray());
        return new DescribeTopicPermissionsV2Response($result->toArray());
    }
}
