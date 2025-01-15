<?php

namespace Sunaoka\Aws\Structures\MigrationHub\NotifyMigrationTaskState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'FAILED'|'COMPLETED' $Status
 * @property string|null $StatusDetail
 * @property int<0, 100>|null $ProgressPercent
 */
class Task extends Shape
{
    /**
     * @param array{
     *     Status: 'NOT_STARTED'|'IN_PROGRESS'|'FAILED'|'COMPLETED',
     *     StatusDetail?: string|null,
     *     ProgressPercent?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
