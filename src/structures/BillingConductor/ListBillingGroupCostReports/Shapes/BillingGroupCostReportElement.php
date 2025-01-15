<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListBillingGroupCostReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $AWSCost
 * @property string|null $ProformaCost
 * @property string|null $Margin
 * @property string|null $MarginPercentage
 * @property string|null $Currency
 */
class BillingGroupCostReportElement extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     AWSCost?: string|null,
     *     ProformaCost?: string|null,
     *     Margin?: string|null,
     *     MarginPercentage?: string|null,
     *     Currency?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
