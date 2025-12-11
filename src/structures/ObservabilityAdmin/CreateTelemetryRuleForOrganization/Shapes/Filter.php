<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateTelemetryRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KEEP'|'DROP'|null $Behavior
 * @property 'MEETS_ALL'|'MEETS_ANY'|null $Requirement
 * @property list<Condition>|null $Conditions
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     Behavior?: 'KEEP'|'DROP'|null,
     *     Requirement?: 'MEETS_ALL'|'MEETS_ANY'|null,
     *     Conditions?: list<Condition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
