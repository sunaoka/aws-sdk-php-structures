<?php

namespace Sunaoka\Aws\Structures\S3\RestoreObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RecordDelimiter
 */
class JSONOutput extends Shape
{
    /**
     * @param array{RecordDelimiter?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
