<?php

namespace Sunaoka\Aws\Structures\MigrationHub\DescribeMigrationTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'FAILED'|'COMPLETED' $Status
 * @property string $StatusDetail
 * @property int<0, 100> $ProgressPercent
 */
class Task extends Shape
{
    /**
     * @param array{
     *     Status: 'NOT_STARTED'|'IN_PROGRESS'|'FAILED'|'COMPLETED',
     *     StatusDetail?: string,
     *     ProgressPercent?: int<0, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
