<?php

namespace Sunaoka\Aws\Structures\SecurityLake\UpdateDataLakeExceptionSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max> $exceptionTimeToLive
 * @property string $notificationEndpoint
 * @property string $subscriptionProtocol
 */
class UpdateDataLakeExceptionSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     exceptionTimeToLive?: int<1, max>,
     *     notificationEndpoint: string,
     *     subscriptionProtocol: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
