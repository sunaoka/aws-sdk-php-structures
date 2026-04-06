<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CancelMetadataModelConversion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Status
 * @property string|null $RequestIdentifier
 * @property string|null $MigrationProjectArn
 * @property ErrorDetails|null $Error
 * @property ExportSqlDetails|null $ExportSqlDetails
 * @property Progress|null $Progress
 */
class SchemaConversionRequest extends Shape
{
    /**
     * @param array{
     *     Status?: string|null,
     *     RequestIdentifier?: string|null,
     *     MigrationProjectArn?: string|null,
     *     Error?: ErrorDetails|null,
     *     ExportSqlDetails?: ExportSqlDetails|null,
     *     Progress?: Progress|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
