<?php

namespace Sunaoka\Aws\Structures\mgn\PauseReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ec2InstanceID
 * @property 'WAITING'|'SUCCEEDED'|'UNKNOWN'|'STOPPED'|null $firstBoot
 * @property string|null $jobID
 */
class LaunchedInstance extends Shape
{
    /**
     * @param array{
     *     ec2InstanceID?: string|null,
     *     firstBoot?: 'WAITING'|'SUCCEEDED'|'UNKNOWN'|'STOPPED'|null,
     *     jobID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
