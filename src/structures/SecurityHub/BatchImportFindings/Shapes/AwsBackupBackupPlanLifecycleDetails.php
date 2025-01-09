<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DeleteAfterDays
 * @property int $MoveToColdStorageAfterDays
 */
class AwsBackupBackupPlanLifecycleDetails extends Shape
{
    /**
     * @param array{
     *     DeleteAfterDays?: int,
     *     MoveToColdStorageAfterDays?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
