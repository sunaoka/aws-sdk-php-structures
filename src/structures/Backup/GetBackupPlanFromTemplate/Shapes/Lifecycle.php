<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupPlanFromTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MoveToColdStorageAfterDays
 * @property int $DeleteAfterDays
 * @property bool $OptInToArchiveForSupportedResources
 */
class Lifecycle extends Shape
{
    /**
     * @param array{
     *     MoveToColdStorageAfterDays?: int,
     *     DeleteAfterDays?: int,
     *     OptInToArchiveForSupportedResources?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
