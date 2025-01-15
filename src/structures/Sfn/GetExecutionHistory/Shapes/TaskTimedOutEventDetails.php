<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceType
 * @property string $resource
 * @property string|null $error
 * @property string|null $cause
 */
class TaskTimedOutEventDetails extends Shape
{
    /**
     * @param array{
     *     resourceType: string,
     *     resource: string,
     *     error?: string|null,
     *     cause?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
