<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ListMigrationTaskUpdates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'FAILED'|'COMPLETED' $Status
 * @property string $StatusDetail
 * @property int $ProgressPercent
 */
class Task extends Shape
{
    /**
     * @param array{
     *     Status: 'NOT_STARTED'|'IN_PROGRESS'|'FAILED'|'COMPLETED',
     *     StatusDetail?: string,
     *     ProgressPercent?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
