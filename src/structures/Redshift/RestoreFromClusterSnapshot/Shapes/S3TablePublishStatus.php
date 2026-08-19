<?php

namespace Sunaoka\Aws\Structures\Redshift\RestoreFromClusterSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $S3Tables
 * @property string|null $S3TableNamespace
 * @property string|null $S3TableGranularity
 * @property bool|null $EnabledAll
 * @property array<string, string>|null $LastIngestionTimes
 */
class S3TablePublishStatus extends Shape
{
    /**
     * @param array{
     *     S3Tables?: list<string>|null,
     *     S3TableNamespace?: string|null,
     *     S3TableGranularity?: string|null,
     *     EnabledAll?: bool|null,
     *     LastIngestionTimes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
