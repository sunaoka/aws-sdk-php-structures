<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\AddApplicationReferenceDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketARN
 * @property string $FileKey
 * @property string $ReferenceRoleARN
 */
class S3ReferenceDataSource extends Shape
{
    /**
     * @param array{
     *     BucketARN: string,
     *     FileKey: string,
     *     ReferenceRoleARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
