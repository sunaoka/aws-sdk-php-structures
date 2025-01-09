<?php

namespace Sunaoka\Aws\Structures\mgn\DisconnectFromService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ec2InstanceID
 * @property 'WAITING'|'SUCCEEDED'|'UNKNOWN'|'STOPPED' $firstBoot
 * @property string $jobID
 */
class LaunchedInstance extends Shape
{
    /**
     * @param array{
     *     ec2InstanceID?: string,
     *     firstBoot?: 'WAITING'|'SUCCEEDED'|'UNKNOWN'|'STOPPED',
     *     jobID?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
