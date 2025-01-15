<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMetadataModelConversions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3ObjectKey
 * @property string|null $ObjectURL
 */
class ExportSqlDetails extends Shape
{
    /**
     * @param array{
     *     S3ObjectKey?: string|null,
     *     ObjectURL?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
