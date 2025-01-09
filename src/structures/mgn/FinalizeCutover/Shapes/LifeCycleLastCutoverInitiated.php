<?php

namespace Sunaoka\Aws\Structures\mgn\FinalizeCutover\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $apiCallDateTime
 * @property string $jobID
 */
class LifeCycleLastCutoverInitiated extends Shape
{
    /**
     * @param array{
     *     apiCallDateTime?: string,
     *     jobID?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
