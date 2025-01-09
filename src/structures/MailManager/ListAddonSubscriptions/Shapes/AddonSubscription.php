<?php

namespace Sunaoka\Aws\Structures\MailManager\ListAddonSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AddonName
 * @property string $AddonSubscriptionArn
 * @property string $AddonSubscriptionId
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class AddonSubscription extends Shape
{
    /**
     * @param array{
     *     AddonName?: string,
     *     AddonSubscriptionArn?: string,
     *     AddonSubscriptionId?: string,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
