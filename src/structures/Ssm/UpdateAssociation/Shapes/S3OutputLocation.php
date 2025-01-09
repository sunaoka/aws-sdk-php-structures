<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutputS3Region
 * @property string $OutputS3BucketName
 * @property string $OutputS3KeyPrefix
 */
class S3OutputLocation extends Shape
{
    /**
     * @param array{
     *     OutputS3Region?: string,
     *     OutputS3BucketName?: string,
     *     OutputS3KeyPrefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
