<?php

namespace Sunaoka\Aws\Structures\SSMContacts\GetContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContactChannelId
 * @property int<0, 60> $RetryIntervalInMinutes
 */
class ChannelTargetInfo extends Shape
{
    /**
     * @param array{
     *     ContactChannelId: string,
     *     RetryIntervalInMinutes?: int<0, 60>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
