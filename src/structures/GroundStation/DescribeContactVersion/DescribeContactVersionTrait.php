<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContactVersion;

trait DescribeContactVersionTrait
{
    /**
     * @param DescribeContactVersionRequest $args
     * @return DescribeContactVersionResponse
     */
    public function describeContactVersion(DescribeContactVersionRequest $args)
    {
        $result = parent::describeContactVersion($args->toArray());
        return new DescribeContactVersionResponse($result->toArray());
    }
}
