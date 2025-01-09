<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketARNUpdate
 * @property string $FileKeyUpdate
 * @property string $ReferenceRoleARNUpdate
 */
class S3ReferenceDataSourceUpdate extends Shape
{
    /**
     * @param array{
     *     BucketARNUpdate?: string,
     *     FileKeyUpdate?: string,
     *     ReferenceRoleARNUpdate?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
