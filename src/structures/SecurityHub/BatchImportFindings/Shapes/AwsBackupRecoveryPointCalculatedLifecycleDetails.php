<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeleteAt
 * @property string $MoveToColdStorageAt
 */
class AwsBackupRecoveryPointCalculatedLifecycleDetails extends Shape
{
    /**
     * @param array{
     *     DeleteAt?: string,
     *     MoveToColdStorageAt?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
