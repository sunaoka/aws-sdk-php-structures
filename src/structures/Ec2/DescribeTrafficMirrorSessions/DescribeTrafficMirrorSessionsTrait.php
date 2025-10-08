<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTrafficMirrorSessions;

trait DescribeTrafficMirrorSessionsTrait
{
    /**
     * @param DescribeTrafficMirrorSessionsRequest $args
     * @return DescribeTrafficMirrorSessionsResponse
     */
    public function describeTrafficMirrorSessions(DescribeTrafficMirrorSessionsRequest $args)
    {
        $result = parent::describeTrafficMirrorSessions($args->toArray());
        return new DescribeTrafficMirrorSessionsResponse($result->toArray());
    }
}
