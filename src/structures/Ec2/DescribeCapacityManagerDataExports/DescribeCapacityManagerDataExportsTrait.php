<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityManagerDataExports;

trait DescribeCapacityManagerDataExportsTrait
{
    /**
     * @param DescribeCapacityManagerDataExportsRequest $args
     * @return DescribeCapacityManagerDataExportsResponse
     */
    public function describeCapacityManagerDataExports(DescribeCapacityManagerDataExportsRequest $args)
    {
        $result = parent::describeCapacityManagerDataExports($args->toArray());
        return new DescribeCapacityManagerDataExportsResponse($result->toArray());
    }
}
