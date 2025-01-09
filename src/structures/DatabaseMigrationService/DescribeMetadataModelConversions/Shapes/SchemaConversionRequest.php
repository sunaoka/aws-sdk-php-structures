<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMetadataModelConversions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Status
 * @property string $RequestIdentifier
 * @property string $MigrationProjectArn
 * @property ErrorDetails $Error
 * @property ExportSqlDetails $ExportSqlDetails
 */
class SchemaConversionRequest extends Shape
{
    /**
     * @param array{
     *     Status?: string,
     *     RequestIdentifier?: string,
     *     MigrationProjectArn?: string,
     *     Error?: ErrorDetails,
     *     ExportSqlDetails?: ExportSqlDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
