<?php

namespace Sunaoka\Aws\Structures\MailManager\ListAddonSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AddonName
 * @property string|null $AddonSubscriptionArn
 * @property string|null $AddonSubscriptionId
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 */
class AddonSubscription extends Shape
{
    /**
     * @param array{
     *     AddonName?: string|null,
     *     AddonSubscriptionArn?: string|null,
     *     AddonSubscriptionId?: string|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
