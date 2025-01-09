<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetActionsForBudget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STOP_EC2_INSTANCES'|'STOP_RDS_INSTANCES' $ActionSubType
 * @property string $Region
 * @property list<string> $InstanceIds
 */
class SsmActionDefinition extends Shape
{
    /**
     * @param array{
     *     ActionSubType: 'STOP_EC2_INSTANCES'|'STOP_RDS_INSTANCES',
     *     Region: string,
     *     InstanceIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
