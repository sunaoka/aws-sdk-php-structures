<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationReferenceDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReferenceId
 * @property string $TableName
 * @property S3ReferenceDataSourceDescription $S3ReferenceDataSourceDescription
 * @property SourceSchema|null $ReferenceSchema
 */
class ReferenceDataSourceDescription extends Shape
{
    /**
     * @param array{
     *     ReferenceId: string,
     *     TableName: string,
     *     S3ReferenceDataSourceDescription: S3ReferenceDataSourceDescription,
     *     ReferenceSchema?: SourceSchema|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
