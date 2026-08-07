<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeBackupAccessPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessPointArn
 */
class DescribeBackupAccessPointRequest extends Request
{
    /**
     * @param array{AccessPointArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
