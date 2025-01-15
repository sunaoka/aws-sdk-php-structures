<?php

namespace Sunaoka\Aws\Structures\mgn\RetryDataReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $apiCallDateTime
 * @property string|null $jobID
 */
class LifeCycleLastTestInitiated extends Shape
{
    /**
     * @param array{
     *     apiCallDateTime?: string|null,
     *     jobID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
