<?php

namespace Sunaoka\Aws\Structures\QBusiness\BatchPutDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $blob
 * @property S3 $s3
 */
class DocumentContent extends Shape
{
    /**
     * @param array{
     *     blob?: string,
     *     s3?: S3
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
