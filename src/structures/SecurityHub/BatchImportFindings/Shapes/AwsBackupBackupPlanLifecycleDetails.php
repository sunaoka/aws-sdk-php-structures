<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DeleteAfterDays
 * @property int|null $MoveToColdStorageAfterDays
 */
class AwsBackupBackupPlanLifecycleDetails extends Shape
{
    /**
     * @param array{
     *     DeleteAfterDays?: int|null,
     *     MoveToColdStorageAfterDays?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
