<?php

namespace Sunaoka\Aws\Structures\Backup\StartBackupJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MoveToColdStorageAfterDays
 * @property int|null $DeleteAfterDays
 * @property bool|null $OptInToArchiveForSupportedResources
 */
class Lifecycle extends Shape
{
    /**
     * @param array{
     *     MoveToColdStorageAfterDays?: int|null,
     *     DeleteAfterDays?: int|null,
     *     OptInToArchiveForSupportedResources?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
