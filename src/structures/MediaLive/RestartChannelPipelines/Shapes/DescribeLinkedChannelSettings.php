<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DescribeFollowerChannelSettings|null $FollowerChannelSettings
 * @property DescribePrimaryChannelSettings|null $PrimaryChannelSettings
 */
class DescribeLinkedChannelSettings extends Shape
{
    /**
     * @param array{
     *     FollowerChannelSettings?: DescribeFollowerChannelSettings|null,
     *     PrimaryChannelSettings?: DescribePrimaryChannelSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
