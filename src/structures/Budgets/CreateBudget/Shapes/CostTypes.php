<?php

namespace Sunaoka\Aws\Structures\Budgets\CreateBudget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IncludeTax
 * @property bool $IncludeSubscription
 * @property bool $UseBlended
 * @property bool $IncludeRefund
 * @property bool $IncludeCredit
 * @property bool $IncludeUpfront
 * @property bool $IncludeRecurring
 * @property bool $IncludeOtherSubscription
 * @property bool $IncludeSupport
 * @property bool $IncludeDiscount
 * @property bool $UseAmortized
 */
class CostTypes extends Shape
{
    /**
     * @param array{
     *     IncludeTax?: bool,
     *     IncludeSubscription?: bool,
     *     UseBlended?: bool,
     *     IncludeRefund?: bool,
     *     IncludeCredit?: bool,
     *     IncludeUpfront?: bool,
     *     IncludeRecurring?: bool,
     *     IncludeOtherSubscription?: bool,
     *     IncludeSupport?: bool,
     *     IncludeDiscount?: bool,
     *     UseAmortized?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
