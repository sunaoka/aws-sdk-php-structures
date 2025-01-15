<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $IncludeTax
 * @property bool|null $IncludeSubscription
 * @property bool|null $UseBlended
 * @property bool|null $IncludeRefund
 * @property bool|null $IncludeCredit
 * @property bool|null $IncludeUpfront
 * @property bool|null $IncludeRecurring
 * @property bool|null $IncludeOtherSubscription
 * @property bool|null $IncludeSupport
 * @property bool|null $IncludeDiscount
 * @property bool|null $UseAmortized
 */
class CostTypes extends Shape
{
    /**
     * @param array{
     *     IncludeTax?: bool|null,
     *     IncludeSubscription?: bool|null,
     *     UseBlended?: bool|null,
     *     IncludeRefund?: bool|null,
     *     IncludeCredit?: bool|null,
     *     IncludeUpfront?: bool|null,
     *     IncludeRecurring?: bool|null,
     *     IncludeOtherSubscription?: bool|null,
     *     IncludeSupport?: bool|null,
     *     IncludeDiscount?: bool|null,
     *     UseAmortized?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
