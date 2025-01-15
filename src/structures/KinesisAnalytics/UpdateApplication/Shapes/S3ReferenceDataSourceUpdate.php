<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BucketARNUpdate
 * @property string|null $FileKeyUpdate
 * @property string|null $ReferenceRoleARNUpdate
 */
class S3ReferenceDataSourceUpdate extends Shape
{
    /**
     * @param array{
     *     BucketARNUpdate?: string|null,
     *     FileKeyUpdate?: string|null,
     *     ReferenceRoleARNUpdate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
