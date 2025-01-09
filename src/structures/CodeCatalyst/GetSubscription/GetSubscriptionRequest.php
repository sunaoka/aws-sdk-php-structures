<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\GetSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 */
class GetSubscriptionRequest extends Request
{
    /**
     * @param array{spaceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
