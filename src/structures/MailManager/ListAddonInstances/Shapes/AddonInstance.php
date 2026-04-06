<?php

namespace Sunaoka\Aws\Structures\MailManager\ListAddonInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AddonInstanceId
 * @property string|null $AddonSubscriptionId
 * @property string|null $AddonName
 * @property string|null $AddonInstanceArn
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 */
class AddonInstance extends Shape
{
    /**
     * @param array{
     *     AddonInstanceId?: string|null,
     *     AddonSubscriptionId?: string|null,
     *     AddonName?: string|null,
     *     AddonInstanceArn?: string|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
