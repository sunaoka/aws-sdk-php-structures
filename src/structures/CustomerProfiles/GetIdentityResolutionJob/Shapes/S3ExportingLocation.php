<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetIdentityResolutionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3BucketName
 * @property string|null $S3KeyName
 */
class S3ExportingLocation extends Shape
{
    /**
     * @param array{
     *     S3BucketName?: string|null,
     *     S3KeyName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
