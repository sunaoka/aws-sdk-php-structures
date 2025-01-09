<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspacesPools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<60, 36000> $DisconnectTimeoutInSeconds
 * @property int<0, 36000> $IdleDisconnectTimeoutInSeconds
 * @property int<600, 432000> $MaxUserDurationInSeconds
 */
class TimeoutSettings extends Shape
{
    /**
     * @param array{
     *     DisconnectTimeoutInSeconds?: int<60, 36000>,
     *     IdleDisconnectTimeoutInSeconds?: int<0, 36000>,
     *     MaxUserDurationInSeconds?: int<600, 432000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
