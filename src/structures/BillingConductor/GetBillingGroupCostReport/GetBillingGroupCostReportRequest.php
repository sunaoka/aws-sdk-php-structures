<?php

namespace Sunaoka\Aws\Structures\BillingConductor\GetBillingGroupCostReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property Shapes\BillingPeriodRange $BillingPeriodRange
 * @property list<'PRODUCT_NAME'|'BILLING_PERIOD'> $GroupBy
 * @property int<200, 300> $MaxResults
 * @property string $NextToken
 */
class GetBillingGroupCostReportRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     BillingPeriodRange?: Shapes\BillingPeriodRange,
     *     GroupBy?: list<'PRODUCT_NAME'|'BILLING_PERIOD'>,
     *     MaxResults?: int<200, 300>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
