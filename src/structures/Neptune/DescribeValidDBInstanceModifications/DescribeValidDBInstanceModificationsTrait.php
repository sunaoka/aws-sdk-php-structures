<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeValidDBInstanceModifications;

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
