<?php

namespace Sunaoka\Aws\Structures\ElementalInference\ListScheduleActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionName
 * @property ScheduleActionStartConfiguration $startConfiguration
 * @property list<ScheduleActionOperation> $operations
 * @property 'PENDING'|'COMPLETED'|'FAILED' $status
 * @property ScheduleActionError|null $error
 */
class ScheduleAction extends Shape
{
    /**
     * @param array{
     *     actionName: string,
     *     startConfiguration: ScheduleActionStartConfiguration,
     *     operations: list<ScheduleActionOperation>,
     *     status: 'PENDING'|'COMPLETED'|'FAILED',
     *     error?: ScheduleActionError|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
