<?php

namespace Sunaoka\Aws\Structures\MigrationHub\DescribeMigrationTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProgressUpdateStream
 * @property string|null $MigrationTaskName
 * @property Task|null $Task
 * @property \Aws\Api\DateTimeResult|null $UpdateDateTime
 * @property list<ResourceAttribute>|null $ResourceAttributeList
 */
class MigrationTask extends Shape
{
    /**
     * @param array{
     *     ProgressUpdateStream?: string|null,
     *     MigrationTaskName?: string|null,
     *     Task?: Task|null,
     *     UpdateDateTime?: \Aws\Api\DateTimeResult|null,
     *     ResourceAttributeList?: list<ResourceAttribute>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
