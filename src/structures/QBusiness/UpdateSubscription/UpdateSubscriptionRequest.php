<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $subscriptionId
 * @property 'Q_LITE'|'Q_BUSINESS' $type
 */
class UpdateSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     subscriptionId: string,
     *     type: 'Q_LITE'|'Q_BUSINESS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
