<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeBackupAccessPoint;

trait DescribeBackupAccessPointTrait
{
    /**
     * @param DescribeBackupAccessPointRequest $args
     * @return DescribeBackupAccessPointResponse
     */
    public function describeBackupAccessPoint(DescribeBackupAccessPointRequest $args)
    {
        $result = parent::describeBackupAccessPoint($args->toArray());
        return new DescribeBackupAccessPointResponse($result->toArray());
    }
}
