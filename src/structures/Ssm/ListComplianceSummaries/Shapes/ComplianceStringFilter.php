<?php

namespace Sunaoka\Aws\Structures\Ssm\ListComplianceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property list<string>|null $Values
 * @property 'EQUAL'|'NOT_EQUAL'|'BEGIN_WITH'|'LESS_THAN'|'GREATER_THAN'|null $Type
 */
class ComplianceStringFilter extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     Values?: list<string>|null,
     *     Type?: 'EQUAL'|'NOT_EQUAL'|'BEGIN_WITH'|'LESS_THAN'|'GREATER_THAN'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
