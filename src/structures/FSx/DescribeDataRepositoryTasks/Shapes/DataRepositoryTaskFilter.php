<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeDataRepositoryTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'file-system-id'|'task-lifecycle'|'data-repository-association-id'|'file-cache-id'|null $Name
 * @property list<string>|null $Values
 */
class DataRepositoryTaskFilter extends Shape
{
    /**
     * @param array{
     *     Name?: 'file-system-id'|'task-lifecycle'|'data-repository-association-id'|'file-cache-id'|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
