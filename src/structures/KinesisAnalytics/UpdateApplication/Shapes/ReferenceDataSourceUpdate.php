<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReferenceId
 * @property string|null $TableNameUpdate
 * @property S3ReferenceDataSourceUpdate|null $S3ReferenceDataSourceUpdate
 * @property SourceSchema|null $ReferenceSchemaUpdate
 */
class ReferenceDataSourceUpdate extends Shape
{
    /**
     * @param array{
     *     ReferenceId: string,
     *     TableNameUpdate?: string|null,
     *     S3ReferenceDataSourceUpdate?: S3ReferenceDataSourceUpdate|null,
     *     ReferenceSchemaUpdate?: SourceSchema|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
