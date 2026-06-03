<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCommitmentPurchaseAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PAYER'|'LINKED'|null $AccountScope
 * @property string|null $AccountId
 * @property 'MAX_SAVINGS'|'CUSTOM_COMMITMENT'|'TARGET_AVERAGE_COVERAGE' $AnalysisType
 * @property list<SavingsPlans> $SavingsPlansToAdd
 * @property list<string>|null $SavingsPlansToExclude
 * @property DateInterval $LookBackTimePeriod
 * @property int<10, 100>|null $SavingsPlansTargetCoverage
 */
class SavingsPlansPurchaseAnalysisConfiguration extends Shape
{
    /**
     * @param array{
     *     AccountScope?: 'PAYER'|'LINKED'|null,
     *     AccountId?: string|null,
     *     AnalysisType: 'MAX_SAVINGS'|'CUSTOM_COMMITMENT'|'TARGET_AVERAGE_COVERAGE',
     *     SavingsPlansToAdd: list<SavingsPlans>,
     *     SavingsPlansToExclude?: list<string>|null,
     *     LookBackTimePeriod: DateInterval,
     *     SavingsPlansTargetCoverage?: int<10, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
