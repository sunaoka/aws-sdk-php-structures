<?php

namespace Sunaoka\Aws\Structures\SSMContacts\CreateContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContactChannelId
 * @property int<0, 60>|null $RetryIntervalInMinutes
 */
class ChannelTargetInfo extends Shape
{
    /**
     * @param array{
     *     ContactChannelId: string,
     *     RetryIntervalInMinutes?: int<0, 60>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
