<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateSubscriptionDefinitionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AmznClientToken
 * @property string $SubscriptionDefinitionId
 * @property list<Shapes\Subscription> $Subscriptions
 */
class CreateSubscriptionDefinitionVersionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string,
     *     SubscriptionDefinitionId: string,
     *     Subscriptions?: list<Shapes\Subscription>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
