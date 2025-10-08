<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeEphemeris;

trait DescribeEphemerisTrait
{
    /**
     * @param DescribeEphemerisRequest $args
     * @return DescribeEphemerisResponse
     */
    public function describeEphemeris(DescribeEphemerisRequest $args)
    {
        $result = parent::describeEphemeris($args->toArray());
        return new DescribeEphemerisResponse($result->toArray());
    }
}
