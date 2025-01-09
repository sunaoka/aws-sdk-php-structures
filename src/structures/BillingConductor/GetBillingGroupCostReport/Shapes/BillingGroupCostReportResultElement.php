<?php

namespace Sunaoka\Aws\Structures\BillingConductor\GetBillingGroupCostReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $AWSCost
 * @property string $ProformaCost
 * @property string $Margin
 * @property string $MarginPercentage
 * @property string $Currency
 * @property list<Attribute> $Attributes
 */
class BillingGroupCostReportResultElement extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     AWSCost?: string,
     *     ProformaCost?: string,
     *     Margin?: string,
     *     MarginPercentage?: string,
     *     Currency?: string,
     *     Attributes?: list<Attribute>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
