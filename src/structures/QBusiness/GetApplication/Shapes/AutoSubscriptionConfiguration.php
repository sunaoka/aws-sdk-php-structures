<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $autoSubscribe
 * @property 'Q_LITE'|'Q_BUSINESS' $defaultSubscriptionType
 */
class AutoSubscriptionConfiguration extends Shape
{
    /**
     * @param array{
     *     autoSubscribe: 'ENABLED'|'DISABLED',
     *     defaultSubscriptionType?: 'Q_LITE'|'Q_BUSINESS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
