<?php

namespace Sunaoka\Aws\Structures\CostExplorer\DeleteAnomalySubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriptionArn
 */
class DeleteAnomalySubscriptionRequest extends Request
{
    /**
     * @param array{SubscriptionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
