<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeBackupPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'ENABLING'|'DISABLED'|'DISABLING' $Status
 */
class BackupPolicy extends Shape
{
    /**
     * @param array{Status: 'ENABLED'|'ENABLING'|'DISABLED'|'DISABLING'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
