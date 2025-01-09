<?php

namespace Sunaoka\Aws\Structures\SecurityLake\DeleteSubscriber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $subscriberId
 */
class DeleteSubscriberRequest extends Request
{
    /**
     * @param array{subscriberId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
