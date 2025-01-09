<?php

namespace Sunaoka\Aws\Structures\Budgets\DeleteBudgetAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SNS'|'EMAIL' $SubscriptionType
 * @property string $Address
 */
class Subscriber extends Shape
{
    /**
     * @param array{
     *     SubscriptionType: 'SNS'|'EMAIL',
     *     Address: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
