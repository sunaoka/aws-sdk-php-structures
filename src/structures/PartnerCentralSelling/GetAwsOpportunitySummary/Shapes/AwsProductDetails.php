<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetAwsOpportunitySummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProductCode
 * @property string|null $ServiceCode
 * @property list<string> $Categories
 * @property string|null $Amount
 * @property string|null $OptimizedAmount
 * @property string|null $PotentialSavingsAmount
 * @property list<AwsProductOptimization> $Optimizations
 */
class AwsProductDetails extends Shape
{
    /**
     * @param array{
     *     ProductCode: string,
     *     ServiceCode?: string|null,
     *     Categories: list<string>,
     *     Amount?: string|null,
     *     OptimizedAmount?: string|null,
     *     PotentialSavingsAmount?: string|null,
     *     Optimizations: list<AwsProductOptimization>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
