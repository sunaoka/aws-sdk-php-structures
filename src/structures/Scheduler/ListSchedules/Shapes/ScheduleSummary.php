<?php

namespace Sunaoka\Aws\Structures\Scheduler\ListSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property string|null $GroupName
 * @property \Aws\Api\DateTimeResult|null $LastModificationDate
 * @property string|null $Name
 * @property 'ENABLED'|'DISABLED'|null $State
 * @property TargetSummary|null $Target
 */
class ScheduleSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     GroupName?: string|null,
     *     LastModificationDate?: \Aws\Api\DateTimeResult|null,
     *     Name?: string|null,
     *     State?: 'ENABLED'|'DISABLED'|null,
     *     Target?: TargetSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
