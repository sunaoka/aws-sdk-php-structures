<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeBatchLoadTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $ObjectKeyPrefix
 */
class DataSourceS3Configuration extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     ObjectKeyPrefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
