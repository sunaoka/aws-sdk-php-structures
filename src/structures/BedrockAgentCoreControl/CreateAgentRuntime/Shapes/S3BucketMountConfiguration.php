<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $mountPath
 * @property string|null $prefix
 * @property string|null $s3BucketOwner
 * @property string|null $s3BucketRegion
 */
class S3BucketMountConfiguration extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     mountPath: string,
     *     prefix?: string|null,
     *     s3BucketOwner?: string|null,
     *     s3BucketRegion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
