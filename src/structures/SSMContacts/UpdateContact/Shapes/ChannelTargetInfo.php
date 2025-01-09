<?php

namespace Sunaoka\Aws\Structures\SSMContacts\UpdateContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContactChannelId
 * @property int $RetryIntervalInMinutes
 */
class ChannelTargetInfo extends Shape
{
    /**
     * @param array{
     *     ContactChannelId: string,
     *     RetryIntervalInMinutes?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
