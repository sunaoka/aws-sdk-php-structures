<?php

namespace Sunaoka\Aws\Structures\Macie2\PutClassificationExportConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 * @property string|null $keyPrefix
 * @property string $kmsKeyArn
 */
class S3Destination extends Shape
{
    /**
     * @param array{
     *     bucketName: string,
     *     keyPrefix?: string|null,
     *     kmsKeyArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
