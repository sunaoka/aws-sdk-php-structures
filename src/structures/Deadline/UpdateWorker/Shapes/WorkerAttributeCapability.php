<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<string> $values
 */
class WorkerAttributeCapability extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
