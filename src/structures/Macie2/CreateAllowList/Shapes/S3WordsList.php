<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateAllowList\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 * @property string $objectKey
 */
class S3WordsList extends Shape
{
    /**
     * @param array{
     *     bucketName: string,
     *     objectKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
