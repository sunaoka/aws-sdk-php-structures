<?php

namespace Sunaoka\Aws\Structures\CloudTrail\StartImport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3LocationUri
 * @property string $S3BucketRegion
 * @property string $S3BucketAccessRoleArn
 */
class S3ImportSource extends Shape
{
    /**
     * @param array{
     *     S3LocationUri: string,
     *     S3BucketRegion: string,
     *     S3BucketAccessRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
