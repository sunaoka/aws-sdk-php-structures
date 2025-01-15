<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateAssociationBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OutputS3Region
 * @property string|null $OutputS3BucketName
 * @property string|null $OutputS3KeyPrefix
 */
class S3OutputLocation extends Shape
{
    /**
     * @param array{
     *     OutputS3Region?: string|null,
     *     OutputS3BucketName?: string|null,
     *     OutputS3KeyPrefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
