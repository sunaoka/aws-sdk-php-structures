<?php

namespace Sunaoka\Aws\Structures\Scheduler\ListScheduleGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $LastModificationDate
 * @property string $Name
 * @property 'ACTIVE'|'DELETING' $State
 */
class ScheduleGroupSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     LastModificationDate?: \Aws\Api\DateTimeResult,
     *     Name?: string,
     *     State?: 'ACTIVE'|'DELETING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
