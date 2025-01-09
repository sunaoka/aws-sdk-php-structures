<?php

namespace Sunaoka\Aws\Structures\Ssm\ListComplianceItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property list<string> $Values
 * @property 'EQUAL'|'NOT_EQUAL'|'BEGIN_WITH'|'LESS_THAN'|'GREATER_THAN' $Type
 */
class ComplianceStringFilter extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     Values?: list<string>,
     *     Type?: 'EQUAL'|'NOT_EQUAL'|'BEGIN_WITH'|'LESS_THAN'|'GREATER_THAN'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
