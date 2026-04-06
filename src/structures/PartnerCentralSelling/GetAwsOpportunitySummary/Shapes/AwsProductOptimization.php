<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetAwsOpportunitySummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $SavingsAmount
 */
class AwsProductOptimization extends Shape
{
    /**
     * @param array{
     *     Description: string,
     *     SavingsAmount: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
