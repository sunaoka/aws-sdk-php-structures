<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $Bytes
 * @property S3Object $S3Object
 */
class Document extends Shape
{
    /**
     * @param array{
     *     Bytes?: string|resource|\Psr\Http\Message\StreamInterface,
     *     S3Object?: S3Object
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
