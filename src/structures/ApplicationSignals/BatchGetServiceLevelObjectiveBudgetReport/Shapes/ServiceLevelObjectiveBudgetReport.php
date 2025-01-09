<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchGetServiceLevelObjectiveBudgetReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property 'PeriodBased'|'RequestBased' $EvaluationType
 * @property 'OK'|'WARNING'|'BREACHED'|'INSUFFICIENT_DATA' $BudgetStatus
 * @property double $Attainment
 * @property int $TotalBudgetSeconds
 * @property int $BudgetSecondsRemaining
 * @property int $TotalBudgetRequests
 * @property int $BudgetRequestsRemaining
 * @property ServiceLevelIndicator $Sli
 * @property RequestBasedServiceLevelIndicator $RequestBasedSli
 * @property Goal $Goal
 */
class ServiceLevelObjectiveBudgetReport extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Name: string,
     *     EvaluationType?: 'PeriodBased'|'RequestBased',
     *     BudgetStatus: 'OK'|'WARNING'|'BREACHED'|'INSUFFICIENT_DATA',
     *     Attainment?: double,
     *     TotalBudgetSeconds?: int,
     *     BudgetSecondsRemaining?: int,
     *     TotalBudgetRequests?: int,
     *     BudgetRequestsRemaining?: int,
     *     Sli?: ServiceLevelIndicator,
     *     RequestBasedSli?: RequestBasedServiceLevelIndicator,
     *     Goal?: Goal
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
