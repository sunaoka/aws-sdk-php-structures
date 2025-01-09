<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspacesPools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DisconnectTimeoutInSeconds
 * @property int $IdleDisconnectTimeoutInSeconds
 * @property int $MaxUserDurationInSeconds
 */
class TimeoutSettings extends Shape
{
    /**
     * @param array{
     *     DisconnectTimeoutInSeconds?: int,
     *     IdleDisconnectTimeoutInSeconds?: int,
     *     MaxUserDurationInSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
