<?php

namespace Sunaoka\Aws\Structures\ElementalInference\CreateScheduleAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $actionName
 * @property Shapes\ScheduleActionStartConfiguration $startConfiguration
 * @property list<Shapes\ScheduleActionOperation> $operations
 */
class CreateScheduleActionRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     actionName: string,
     *     startConfiguration: Shapes\ScheduleActionStartConfiguration,
     *     operations: list<Shapes\ScheduleActionOperation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
