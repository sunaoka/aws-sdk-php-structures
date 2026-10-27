<?php

namespace Sunaoka\Aws\Structures\Billing\ListContractualInvestmentSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $investmentSummaryId
 * @property string $investmentName
 * @property 'MILESTONE_BASED'|'OUTCOME_BASED' $investmentType
 * @property Amount|null $maxAllowedInvestmentDisbursementValue
 */
class InvestmentSummary extends Shape
{
    /**
     * @param array{
     *     investmentSummaryId: string,
     *     investmentName: string,
     *     investmentType: 'MILESTONE_BASED'|'OUTCOME_BASED',
     *     maxAllowedInvestmentDisbursementValue?: Amount|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
