<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMetadataModelImports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3ObjectKey
 * @property string $ObjectURL
 */
class ExportSqlDetails extends Shape
{
    /**
     * @param array{
     *     S3ObjectKey?: string,
     *     ObjectURL?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
