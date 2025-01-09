<?php

namespace Sunaoka\Aws\Structures\Scheduler\ListSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property string $GroupName
 * @property \Aws\Api\DateTimeResult $LastModificationDate
 * @property string $Name
 * @property 'ENABLED'|'DISABLED' $State
 * @property TargetSummary $Target
 */
class ScheduleSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     GroupName?: string,
     *     LastModificationDate?: \Aws\Api\DateTimeResult,
     *     Name?: string,
     *     State?: 'ENABLED'|'DISABLED',
     *     Target?: TargetSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
