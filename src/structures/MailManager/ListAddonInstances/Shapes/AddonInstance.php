<?php

namespace Sunaoka\Aws\Structures\MailManager\ListAddonInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AddonInstanceArn
 * @property string $AddonInstanceId
 * @property string $AddonName
 * @property string $AddonSubscriptionId
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class AddonInstance extends Shape
{
    /**
     * @param array{
     *     AddonInstanceArn?: string,
     *     AddonInstanceId?: string,
     *     AddonName?: string,
     *     AddonSubscriptionId?: string,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
