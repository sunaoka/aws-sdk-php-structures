<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeValidDBInstanceModifications;

trait DescribeValidDBInstanceModificationsTrait
{
    /**
     * @param DescribeValidDBInstanceModificationsRequest $args
     * @return DescribeValidDBInstanceModificationsResponse
     */
    public function describeValidDBInstanceModifications(DescribeValidDBInstanceModificationsRequest $args)
    {
        $result = parent::describeValidDBInstanceModifications($args->toArray());
        return new DescribeValidDBInstanceModificationsResponse($result->toArray());
    }
}
