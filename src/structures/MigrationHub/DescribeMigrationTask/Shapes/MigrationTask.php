<?php

namespace Sunaoka\Aws\Structures\MigrationHub\DescribeMigrationTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProgressUpdateStream
 * @property string $MigrationTaskName
 * @property Task $Task
 * @property \Aws\Api\DateTimeResult $UpdateDateTime
 * @property list<ResourceAttribute> $ResourceAttributeList
 */
class MigrationTask extends Shape
{
    /**
     * @param array{
     *     ProgressUpdateStream?: string,
     *     MigrationTaskName?: string,
     *     Task?: Task,
     *     UpdateDateTime?: \Aws\Api\DateTimeResult,
     *     ResourceAttributeList?: list<ResourceAttribute>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
