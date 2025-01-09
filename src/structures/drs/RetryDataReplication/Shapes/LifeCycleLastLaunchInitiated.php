<?php

namespace Sunaoka\Aws\Structures\drs\RetryDataReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $apiCallDateTime
 * @property string $jobID
 * @property 'RECOVERY'|'DRILL' $type
 */
class LifeCycleLastLaunchInitiated extends Shape
{
    /**
     * @param array{
     *     apiCallDateTime?: string,
     *     jobID?: string,
     *     type?: 'RECOVERY'|'DRILL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
