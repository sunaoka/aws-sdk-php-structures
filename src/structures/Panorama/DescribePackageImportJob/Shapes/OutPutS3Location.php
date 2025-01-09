<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribePackageImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $ObjectKey
 */
class OutPutS3Location extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     ObjectKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
