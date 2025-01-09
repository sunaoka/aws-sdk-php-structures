<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\CreateBatchLoadTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $ObjectKey
 */
class DataModelS3Configuration extends Shape
{
    /**
     * @param array{
     *     BucketName?: string,
     *     ObjectKey?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
