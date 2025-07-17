<?php

namespace Sunaoka\Aws\Structures\MailManager\ListAddonSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AddonSubscriptionId
 * @property string|null $AddonName
 * @property string|null $AddonSubscriptionArn
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 */
class AddonSubscription extends Shape
{
    /**
     * @param array{
     *     AddonSubscriptionId?: string|null,
     *     AddonName?: string|null,
     *     AddonSubscriptionArn?: string|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
