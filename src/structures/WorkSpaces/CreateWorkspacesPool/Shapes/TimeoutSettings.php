<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspacesPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<60, 36000>|null $DisconnectTimeoutInSeconds
 * @property int<0, 36000>|null $IdleDisconnectTimeoutInSeconds
 * @property int<600, 432000>|null $MaxUserDurationInSeconds
 */
class TimeoutSettings extends Shape
{
    /**
     * @param array{
     *     DisconnectTimeoutInSeconds?: int<60, 36000>|null,
     *     IdleDisconnectTimeoutInSeconds?: int<0, 36000>|null,
     *     MaxUserDurationInSeconds?: int<600, 432000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
