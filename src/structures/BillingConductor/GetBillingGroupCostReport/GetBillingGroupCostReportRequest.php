<?php

namespace Sunaoka\Aws\Structures\BillingConductor\GetBillingGroupCostReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property Shapes\BillingPeriodRange|null $BillingPeriodRange
 * @property list<'PRODUCT_NAME'|'BILLING_PERIOD'>|null $GroupBy
 * @property int<200, 300>|null $MaxResults
 * @property string|null $NextToken
 */
class GetBillingGroupCostReportRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     BillingPeriodRange?: Shapes\BillingPeriodRange|null,
     *     GroupBy?: list<'PRODUCT_NAME'|'BILLING_PERIOD'>|null,
     *     MaxResults?: int<200, 300>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
