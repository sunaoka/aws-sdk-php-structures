<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\DescribeAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'NORMAL'|'ACTIVE'|'ACKNOWLEDGED'|'SNOOZE_DISABLED'|'LATCHED' $stateName
 * @property RuleEvaluation $ruleEvaluation
 * @property CustomerAction $customerAction
 * @property SystemEvent $systemEvent
 */
class AlarmState extends Shape
{
    /**
     * @param array{
     *     stateName?: 'DISABLED'|'NORMAL'|'ACTIVE'|'ACKNOWLEDGED'|'SNOOZE_DISABLED'|'LATCHED',
     *     ruleEvaluation?: RuleEvaluation,
     *     customerAction?: CustomerAction,
     *     systemEvent?: SystemEvent
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
