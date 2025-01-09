<?php

namespace Sunaoka\Aws\Structures\CodeCommit\TestRepositoryTriggers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $trigger
 * @property string $failureMessage
 */
class RepositoryTriggerExecutionFailure extends Shape
{
    /**
     * @param array{
     *     trigger?: string,
     *     failureMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
