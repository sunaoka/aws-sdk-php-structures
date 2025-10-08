<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribeHandshake;

trait DescribeHandshakeTrait
{
    /**
     * @param DescribeHandshakeRequest $args
     * @return DescribeHandshakeResponse
     */
    public function describeHandshake(DescribeHandshakeRequest $args)
    {
        $result = parent::describeHandshake($args->toArray());
        return new DescribeHandshakeResponse($result->toArray());
    }
}
