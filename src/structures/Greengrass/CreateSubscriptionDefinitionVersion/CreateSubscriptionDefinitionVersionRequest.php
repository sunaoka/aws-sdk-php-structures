<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateSubscriptionDefinitionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AmznClientToken
 * @property string $SubscriptionDefinitionId
 * @property list<Shapes\Subscription>|null $Subscriptions
 */
class CreateSubscriptionDefinitionVersionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string|null,
     *     SubscriptionDefinitionId: string,
     *     Subscriptions?: list<Shapes\Subscription>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
