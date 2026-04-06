<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchGetServiceLevelObjectiveBudgetReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property 'OK'|'WARNING'|'BREACHED'|'INSUFFICIENT_DATA' $BudgetStatus
 * @property double|null $Attainment
 * @property int|null $TotalBudgetSeconds
 * @property int|null $BudgetSecondsRemaining
 * @property ServiceLevelIndicator|null $Sli
 * @property Goal|null $Goal
 */
class ServiceLevelObjectiveBudgetReport extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Name: string,
     *     BudgetStatus: 'OK'|'WARNING'|'BREACHED'|'INSUFFICIENT_DATA',
     *     Attainment?: double|null,
     *     TotalBudgetSeconds?: int|null,
     *     BudgetSecondsRemaining?: int|null,
     *     Sli?: ServiceLevelIndicator|null,
     *     Goal?: Goal|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
