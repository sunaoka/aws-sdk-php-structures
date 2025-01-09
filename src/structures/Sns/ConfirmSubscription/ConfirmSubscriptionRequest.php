<?php

namespace Sunaoka\Aws\Structures\Sns\ConfirmSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TopicArn
 * @property string $Token
 * @property string $AuthenticateOnUnsubscribe
 */
class ConfirmSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     TopicArn: string,
     *     Token: string,
     *     AuthenticateOnUnsubscribe?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
