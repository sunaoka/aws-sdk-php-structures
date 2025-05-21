<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property Shapes\SubscriptionPrincipal $principal
 * @property 'Q_LITE'|'Q_BUSINESS' $type
 * @property string|null $clientToken
 */
class CreateSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     principal: Shapes\SubscriptionPrincipal,
     *     type: 'Q_LITE'|'Q_BUSINESS',
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
