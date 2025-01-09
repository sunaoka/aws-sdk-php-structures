<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceType
 * @property string $resource
 * @property string $error
 * @property string $cause
 */
class TaskTimedOutEventDetails extends Shape
{
    /**
     * @param array{
     *     resourceType: string,
     *     resource: string,
     *     error?: string,
     *     cause?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
