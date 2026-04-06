<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteEksAnywhereSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteEksAnywhereSubscriptionRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
