<?php

namespace Sunaoka\Aws\Structures\S3\RestoreObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DOCUMENT'|'LINES'|null $Type
 */
class JSONInput extends Shape
{
    /**
     * @param array{Type?: 'DOCUMENT'|'LINES'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
