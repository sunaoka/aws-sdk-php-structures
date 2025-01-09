<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListBillingGroupCostReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $AWSCost
 * @property string $ProformaCost
 * @property string $Margin
 * @property string $MarginPercentage
 * @property string $Currency
 */
class BillingGroupCostReportElement extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     AWSCost?: string,
     *     ProformaCost?: string,
     *     Margin?: string,
     *     MarginPercentage?: string,
     *     Currency?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
