<?php

namespace Sunaoka\Aws\Structures\Macie\AssociateS3Resources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 * @property string|null $prefix
 * @property ClassificationType $classificationType
 */
class S3ResourceClassification extends Shape
{
    /**
     * @param array{
     *     bucketName: string,
     *     prefix?: string|null,
     *     classificationType: ClassificationType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
