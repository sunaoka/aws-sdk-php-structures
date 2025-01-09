<?php

namespace Sunaoka\Aws\Structures\Rds\AddSourceIdentifierToSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriptionName
 * @property string $SourceIdentifier
 */
class AddSourceIdentifierToSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     SubscriptionName: string,
     *     SourceIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
