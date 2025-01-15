<?php

namespace Sunaoka\Aws\Structures\Scheduler\ListScheduleGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $LastModificationDate
 * @property string|null $Name
 * @property 'ACTIVE'|'DELETING'|null $State
 */
class ScheduleGroupSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     LastModificationDate?: \Aws\Api\DateTimeResult|null,
     *     Name?: string|null,
     *     State?: 'ACTIVE'|'DELETING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
