<?php

namespace Sunaoka\Aws\Structures\SecurityLake\GetSubscriber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $subscriberId
 */
class GetSubscriberRequest extends Request
{
    /**
     * @param array{subscriberId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
