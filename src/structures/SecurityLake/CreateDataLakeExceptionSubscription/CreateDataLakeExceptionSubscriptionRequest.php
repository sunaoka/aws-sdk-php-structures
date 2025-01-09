<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateDataLakeExceptionSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $exceptionTimeToLive
 * @property string $notificationEndpoint
 * @property string $subscriptionProtocol
 */
class CreateDataLakeExceptionSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     exceptionTimeToLive?: int,
     *     notificationEndpoint: string,
     *     subscriptionProtocol: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
