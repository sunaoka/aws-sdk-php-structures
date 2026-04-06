<?php

namespace Sunaoka\Aws\Structures\Macie\UpdateS3Resources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 * @property string|null $prefix
 * @property ClassificationTypeUpdate $classificationTypeUpdate
 */
class S3ResourceClassificationUpdate extends Shape
{
    /**
     * @param array{
     *     bucketName: string,
     *     prefix?: string|null,
     *     classificationTypeUpdate: ClassificationTypeUpdate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
