<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListIdentityResolutionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3BucketName
 * @property string $S3KeyName
 */
class S3ExportingLocation extends Shape
{
    /**
     * @param array{
     *     S3BucketName?: string,
     *     S3KeyName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
