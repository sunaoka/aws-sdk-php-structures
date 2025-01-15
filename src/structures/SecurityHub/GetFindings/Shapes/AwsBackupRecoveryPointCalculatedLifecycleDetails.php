<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeleteAt
 * @property string|null $MoveToColdStorageAt
 */
class AwsBackupRecoveryPointCalculatedLifecycleDetails extends Shape
{
    /**
     * @param array{
     *     DeleteAt?: string|null,
     *     MoveToColdStorageAt?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
