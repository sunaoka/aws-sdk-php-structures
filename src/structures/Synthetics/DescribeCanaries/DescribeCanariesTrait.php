<?php

namespace Sunaoka\Aws\Structures\Synthetics\DescribeCanaries;

trait DescribeCanariesTrait
{
    /**
     * @param DescribeCanariesRequest $args
     * @return DescribeCanariesResponse
     */
    public function describeCanaries(DescribeCanariesRequest $args)
    {
        $result = parent::describeCanaries($args->toArray());
        return new DescribeCanariesResponse($result->toArray());
    }
}
