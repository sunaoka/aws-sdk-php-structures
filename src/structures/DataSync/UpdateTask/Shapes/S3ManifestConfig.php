<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ManifestObjectPath
 * @property string $BucketAccessRoleArn
 * @property string $S3BucketArn
 * @property string|null $ManifestObjectVersionId
 */
class S3ManifestConfig extends Shape
{
    /**
     * @param array{
     *     ManifestObjectPath: string,
     *     BucketAccessRoleArn: string,
     *     S3BucketArn: string,
     *     ManifestObjectVersionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
