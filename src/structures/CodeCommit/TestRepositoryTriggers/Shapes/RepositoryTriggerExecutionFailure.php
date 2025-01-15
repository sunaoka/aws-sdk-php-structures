<?php

namespace Sunaoka\Aws\Structures\CodeCommit\TestRepositoryTriggers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $trigger
 * @property string|null $failureMessage
 */
class RepositoryTriggerExecutionFailure extends Shape
{
    /**
     * @param array{
     *     trigger?: string|null,
     *     failureMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
