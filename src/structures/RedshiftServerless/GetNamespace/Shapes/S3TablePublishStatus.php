<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabledAll
 * @property array<string, string>|null $lastIngestionTimes
 * @property 'namespace'|'account'|null $s3TableGranularity
 * @property string|null $s3TableNamespace
 * @property list<string>|null $s3Tables
 */
class S3TablePublishStatus extends Shape
{
    /**
     * @param array{
     *     enabledAll?: bool|null,
     *     lastIngestionTimes?: array<string, string>|null,
     *     s3TableGranularity?: 'namespace'|'account'|null,
     *     s3TableNamespace?: string|null,
     *     s3Tables?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
