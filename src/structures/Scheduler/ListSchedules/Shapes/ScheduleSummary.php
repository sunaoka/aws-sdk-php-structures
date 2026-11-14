<?php

namespace Sunaoka\Aws\Structures\Scheduler\ListSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $GroupName
 * @property 'ENABLED'|'DISABLED'|null $State
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $LastModificationDate
 * @property TargetSummary|null $Target
 */
class ScheduleSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Name?: string|null,
     *     GroupName?: string|null,
     *     State?: 'ENABLED'|'DISABLED'|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     LastModificationDate?: \Aws\Api\DateTimeResult|null,
     *     Target?: TargetSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
