<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReferenceId
 * @property string $TableNameUpdate
 * @property S3ReferenceDataSourceUpdate $S3ReferenceDataSourceUpdate
 * @property SourceSchema $ReferenceSchemaUpdate
 */
class ReferenceDataSourceUpdate extends Shape
{
    /**
     * @param array{
     *     ReferenceId: string,
     *     TableNameUpdate?: string,
     *     S3ReferenceDataSourceUpdate?: S3ReferenceDataSourceUpdate,
     *     ReferenceSchemaUpdate?: SourceSchema
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
