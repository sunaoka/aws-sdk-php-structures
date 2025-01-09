<?php

namespace Sunaoka\Aws\Structures\CostExplorer\StartCommitmentPurchaseAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PAYER'|'LINKED' $AccountScope
 * @property string $AccountId
 * @property 'MAX_SAVINGS'|'CUSTOM_COMMITMENT' $AnalysisType
 * @property list<SavingsPlans> $SavingsPlansToAdd
 * @property list<string> $SavingsPlansToExclude
 * @property DateInterval $LookBackTimePeriod
 */
class SavingsPlansPurchaseAnalysisConfiguration extends Shape
{
    /**
     * @param array{
     *     AccountScope?: 'PAYER'|'LINKED',
     *     AccountId?: string,
     *     AnalysisType: 'MAX_SAVINGS'|'CUSTOM_COMMITMENT',
     *     SavingsPlansToAdd: list<SavingsPlans>,
     *     SavingsPlansToExclude?: list<string>,
     *     LookBackTimePeriod: DateInterval
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
