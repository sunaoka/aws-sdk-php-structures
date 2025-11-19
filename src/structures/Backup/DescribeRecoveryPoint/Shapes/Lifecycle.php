<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeRecoveryPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MoveToColdStorageAfterDays
 * @property int|null $DeleteAfterDays
 * @property bool|null $OptInToArchiveForSupportedResources
 * @property 'DELETE_AFTER_COPY'|null $DeleteAfterEvent
 */
class Lifecycle extends Shape
{
    /**
     * @param array{
     *     MoveToColdStorageAfterDays?: int|null,
     *     DeleteAfterDays?: int|null,
     *     OptInToArchiveForSupportedResources?: bool|null,
     *     DeleteAfterEvent?: 'DELETE_AFTER_COPY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
