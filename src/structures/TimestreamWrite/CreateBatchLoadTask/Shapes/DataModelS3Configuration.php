<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\CreateBatchLoadTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BucketName
 * @property string|null $ObjectKey
 */
class DataModelS3Configuration extends Shape
{
    /**
     * @param array{
     *     BucketName?: string|null,
     *     ObjectKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
