<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Q_LITE'|'Q_BUSINESS'|null $type
 */
class SubscriptionDetails extends Shape
{
    /**
     * @param array{type?: 'Q_LITE'|'Q_BUSINESS'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
