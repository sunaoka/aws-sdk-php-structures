<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\DescribeAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'NORMAL'|'ACTIVE'|'ACKNOWLEDGED'|'SNOOZE_DISABLED'|'LATCHED'|null $stateName
 * @property RuleEvaluation|null $ruleEvaluation
 * @property CustomerAction|null $customerAction
 * @property SystemEvent|null $systemEvent
 */
class AlarmState extends Shape
{
    /**
     * @param array{
     *     stateName?: 'DISABLED'|'NORMAL'|'ACTIVE'|'ACKNOWLEDGED'|'SNOOZE_DISABLED'|'LATCHED'|null,
     *     ruleEvaluation?: RuleEvaluation|null,
     *     customerAction?: CustomerAction|null,
     *     systemEvent?: SystemEvent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
