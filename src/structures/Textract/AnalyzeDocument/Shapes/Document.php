<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bytes
 * @property S3Object $S3Object
 */
class Document extends Shape
{
    /**
     * @param array{
     *     Bytes?: string,
     *     S3Object?: S3Object
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
