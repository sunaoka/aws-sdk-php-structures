<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\ListHarvestJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $DestinationPath
 */
class S3DestinationConfig extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     DestinationPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
