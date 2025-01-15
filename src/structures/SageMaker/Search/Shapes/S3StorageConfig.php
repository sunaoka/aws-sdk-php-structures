<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property string|null $KmsKeyId
 * @property string|null $ResolvedOutputS3Uri
 */
class S3StorageConfig extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     KmsKeyId?: string|null,
     *     ResolvedOutputS3Uri?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
