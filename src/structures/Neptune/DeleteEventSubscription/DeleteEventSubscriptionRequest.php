<?php

namespace Sunaoka\Aws\Structures\Neptune\DeleteEventSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriptionName
 */
class DeleteEventSubscriptionRequest extends Request
{
    /**
     * @param array{SubscriptionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
