<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeOrderableDBInstanceOptions;

trait DescribeOrderableDBInstanceOptionsTrait
{
    /**
     * @param DescribeOrderableDBInstanceOptionsRequest $args
     * @return DescribeOrderableDBInstanceOptionsResponse
     */
    public function describeOrderableDBInstanceOptions(DescribeOrderableDBInstanceOptionsRequest $args)
    {
        $result = parent::describeOrderableDBInstanceOptions($args->toArray());
        return new DescribeOrderableDBInstanceOptionsResponse($result->toArray());
    }
}
