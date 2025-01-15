<?php

namespace Sunaoka\Aws\Structures\QBusiness\BatchPutDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $blob
 * @property S3|null $s3
 */
class DocumentContent extends Shape
{
    /**
     * @param array{
     *     blob?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     s3?: S3|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
