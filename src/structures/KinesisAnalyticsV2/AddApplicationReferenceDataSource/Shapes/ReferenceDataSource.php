<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationReferenceDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TableName
 * @property S3ReferenceDataSource|null $S3ReferenceDataSource
 * @property SourceSchema $ReferenceSchema
 */
class ReferenceDataSource extends Shape
{
    /**
     * @param array{
     *     TableName: string,
     *     S3ReferenceDataSource?: S3ReferenceDataSource|null,
     *     ReferenceSchema: SourceSchema
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
