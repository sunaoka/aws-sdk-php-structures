<?php

namespace Sunaoka\Aws\Structures\AutoScaling\SetInstanceHealth;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $HealthStatus
 * @property bool $ShouldRespectGracePeriod
 */
class SetInstanceHealthRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     HealthStatus: string,
     *     ShouldRespectGracePeriod?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
