<?php

namespace Sunaoka\Aws\Structures\S3\SelectObjectContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Payload
 */
class RecordsEvent extends Shape
{
    /**
     * @param array{Payload?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
