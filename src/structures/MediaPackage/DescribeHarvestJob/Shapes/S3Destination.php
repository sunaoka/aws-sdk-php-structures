<?php

namespace Sunaoka\Aws\Structures\MediaPackage\DescribeHarvestJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $ManifestKey
 * @property string $RoleArn
 */
class S3Destination extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     ManifestKey: string,
     *     RoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
