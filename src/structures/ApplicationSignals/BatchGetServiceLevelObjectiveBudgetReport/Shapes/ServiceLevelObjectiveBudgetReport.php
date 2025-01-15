<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchGetServiceLevelObjectiveBudgetReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property 'PeriodBased'|'RequestBased'|null $EvaluationType
 * @property 'OK'|'WARNING'|'BREACHED'|'INSUFFICIENT_DATA' $BudgetStatus
 * @property double|null $Attainment
 * @property int|null $TotalBudgetSeconds
 * @property int|null $BudgetSecondsRemaining
 * @property int|null $TotalBudgetRequests
 * @property int|null $BudgetRequestsRemaining
 * @property ServiceLevelIndicator|null $Sli
 * @property RequestBasedServiceLevelIndicator|null $RequestBasedSli
 * @property Goal|null $Goal
 */
class ServiceLevelObjectiveBudgetReport extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Name: string,
     *     EvaluationType?: 'PeriodBased'|'RequestBased'|null,
     *     BudgetStatus: 'OK'|'WARNING'|'BREACHED'|'INSUFFICIENT_DATA',
     *     Attainment?: double|null,
     *     TotalBudgetSeconds?: int|null,
     *     BudgetSecondsRemaining?: int|null,
     *     TotalBudgetRequests?: int|null,
     *     BudgetRequestsRemaining?: int|null,
     *     Sli?: ServiceLevelIndicator|null,
     *     RequestBasedSli?: RequestBasedServiceLevelIndicator|null,
     *     Goal?: Goal|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
