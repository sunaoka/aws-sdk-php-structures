<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupPlanFromJSON\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MoveToColdStorageAfterDays
 * @property int|null $DeleteAfterDays
 */
class Lifecycle extends Shape
{
    /**
     * @param array{
     *     MoveToColdStorageAfterDays?: int|null,
     *     DeleteAfterDays?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
