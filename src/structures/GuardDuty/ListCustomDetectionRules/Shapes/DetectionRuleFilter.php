<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCustomDetectionRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'name'|'description'|'dataSource'|'severity'|'tactic'|'technique'|'service' $Name
 * @property list<string> $Values
 * @property 'EQUALS'|'CONTAINS'|null $Condition
 */
class DetectionRuleFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'name'|'description'|'dataSource'|'severity'|'tactic'|'technique'|'service',
     *     Values: list<string>,
     *     Condition?: 'EQUALS'|'CONTAINS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
