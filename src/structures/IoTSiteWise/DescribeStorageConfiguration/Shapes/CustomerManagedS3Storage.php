<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeStorageConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3ResourceArn
 * @property string $roleArn
 */
class CustomerManagedS3Storage extends Shape
{
    /**
     * @param array{
     *     s3ResourceArn: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
