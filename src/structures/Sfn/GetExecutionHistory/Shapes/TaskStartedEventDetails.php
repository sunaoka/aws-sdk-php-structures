<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceType
 * @property string $resource
 */
class TaskStartedEventDetails extends Shape
{
    /**
     * @param array{
     *     resourceType: string,
     *     resource: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
