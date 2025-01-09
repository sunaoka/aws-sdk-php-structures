<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFeatureGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property string $KmsKeyId
 * @property string $ResolvedOutputS3Uri
 */
class S3StorageConfig extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     KmsKeyId?: string,
     *     ResolvedOutputS3Uri?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
