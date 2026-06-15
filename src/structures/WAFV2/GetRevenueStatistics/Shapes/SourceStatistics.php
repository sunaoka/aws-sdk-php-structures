<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRevenueStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceName
 * @property double $Percentage
 * @property string $Amount
 * @property int<0, max> $RequestCount
 * @property string|null $SourceCategory
 * @property string|null $Intent
 * @property string|null $Organization
 * @property bool|null $Verified
 * @property string|null $GroupByValue
 */
class SourceStatistics extends Shape
{
    /**
     * @param array{
     *     SourceName: string,
     *     Percentage: double,
     *     Amount: string,
     *     RequestCount: int<0, max>,
     *     SourceCategory?: string|null,
     *     Intent?: string|null,
     *     Organization?: string|null,
     *     Verified?: bool|null,
     *     GroupByValue?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
