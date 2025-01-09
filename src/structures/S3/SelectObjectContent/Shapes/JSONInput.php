<?php

namespace Sunaoka\Aws\Structures\S3\SelectObjectContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DOCUMENT'|'LINES' $Type
 */
class JSONInput extends Shape
{
    /**
     * @param array{Type?: 'DOCUMENT'|'LINES'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
