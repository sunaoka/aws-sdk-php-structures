<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTrafficMirrorTargets;

trait DescribeTrafficMirrorTargetsTrait
{
    /**
     * @param DescribeTrafficMirrorTargetsRequest $args
     * @return DescribeTrafficMirrorTargetsResponse
     */
    public function describeTrafficMirrorTargets(DescribeTrafficMirrorTargetsRequest $args)
    {
        $result = parent::describeTrafficMirrorTargets($args->toArray());
        return new DescribeTrafficMirrorTargetsResponse($result->toArray());
    }
}
