<?php

namespace Sunaoka\Aws\Structures\drs\DisconnectSourceServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $apiCallDateTime
 * @property string|null $jobID
 * @property 'RECOVERY'|'DRILL'|null $type
 */
class LifeCycleLastLaunchInitiated extends Shape
{
    /**
     * @param array{
     *     apiCallDateTime?: string|null,
     *     jobID?: string|null,
     *     type?: 'RECOVERY'|'DRILL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
